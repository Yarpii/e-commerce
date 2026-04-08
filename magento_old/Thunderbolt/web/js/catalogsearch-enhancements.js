(function () {
    var RECENT_SEARCHES_KEY = 'thunderbolt_recent_searches';
    var RECENT_VIEWED_KEY = 'thunderbolt_recent_viewed';
    var LEGACY_RECENT_SEARCHES_KEY = 'sd_recent_searches';
    var LEGACY_RECENT_VIEWED_KEY = 'sd_recent_viewed';
    var SYNONYMS = {
        telefoonhouder: ['phone mount', 'smartphone houder'],
        'phone mount': ['telefoonhouder'],
        remblokken: ['brake pads'],
        'brake pads': ['remblokken'],
        windscherm: ['windscreen'],
        windscreen: ['windscherm'],
        helm: ['helmet'],
        helmet: ['helm'],
        variateur: ['variator'],
        variator: ['variateur']
    };

    function safeParse(json, fallback) {
        try {
            return JSON.parse(json);
        } catch (e) {
            return fallback;
        }
    }

    function readLocalStorage(key, fallback) {
        try {
            return safeParse(window.localStorage.getItem(key) || '', fallback);
        } catch (e) {
            return fallback;
        }
    }

    function writeLocalStorage(key, value) {
        try {
            window.localStorage.setItem(key, JSON.stringify(value));
        } catch (e) {
            // no-op
        }
    }

    function upsertRecent(list, value, max) {
        var next = (list || []).filter(function (item) {
            return item && item.toLowerCase() !== value.toLowerCase();
        });
        next.unshift(value);
        return next.slice(0, max);
    }

    function renderChips(container, values, label) {
        container.innerHTML = '';

        if (label) {
            var labelNode = document.createElement('span');
            labelNode.className = 'self-center text-sm font-semibold text-[var(--color-muted)]';
            labelNode.textContent = label;
            container.appendChild(labelNode);
        }

        values.forEach(function (value) {
            var link = document.createElement('a');
            link.className = 'inline-flex border border-zinc-200 bg-zinc-50 px-2.5 py-1.5 text-sm text-zinc-700 transition-colors hover:border-[var(--color-accent)] hover:text-[var(--color-accent)] dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-200';
            link.href = '/catalogsearch/result/?q=' + encodeURIComponent(value);
            link.textContent = value;
            container.appendChild(link);
        });
    }

    function extractSuggestionLabels(payload) {
        if (!payload) {
            return [];
        }

        if (Array.isArray(payload)) {
            return payload
                .map(function (item) {
                    if (typeof item === 'string') {
                        return item;
                    }
                    return item && (item.title || item.value || item.query || item.label);
                })
                .filter(Boolean);
        }

        if (typeof payload === 'object') {
            var items = payload.items || payload.suggestions || payload.results || [];
            if (Array.isArray(items)) {
                return items
                    .map(function (item) {
                        if (typeof item === 'string') {
                            return item;
                        }
                        return item && (item.title || item.value || item.query || item.label);
                    })
                    .filter(Boolean);
            }
        }

        return [];
    }

    function fetchSuggestions(suggestUrl, query) {
        var url = suggestUrl + (suggestUrl.indexOf('?') > -1 ? '&' : '?') + 'q=' + encodeURIComponent(query || '');
        return fetch(url, { credentials: 'same-origin' })
            .then(function (response) {
                if (!response.ok) {
                    return [];
                }
                return response.json();
            })
            .then(extractSuggestionLabels)
            .catch(function () {
                return [];
            });
    }

    function bindCatalogSearch(root) {
        var form = root.querySelector('[data-catalogsearch-form]');
        var input = root.querySelector('[data-catalogsearch-input]');
        var autocomplete = root.querySelector('[data-catalogsearch-autocomplete]');
        var popularContainer = root.querySelector('[data-catalogsearch-popular]');
        var recentSearchesWrap = root.querySelector('[data-catalogsearch-recent-searches]');
        var recentSearchList = root.querySelector('[data-catalogsearch-recent-list]');
        var recentViewedWrap = root.querySelector('[data-catalogsearch-recent-viewed]');
        var recentViewedList = root.querySelector('[data-catalogsearch-viewed-list]');
        var suggestUrl = root.getAttribute('data-suggest-url') || '/search/ajax/suggest';

        if (!form || !input || !autocomplete) {
            return;
        }

        function openAutocomplete(items) {
            autocomplete.innerHTML = '';
            if (!items.length) {
                autocomplete.hidden = true;
                return;
            }

            items.slice(0, 8).forEach(function (item) {
                var option = document.createElement('button');
                option.type = 'button';
                option.className = 'block w-full border-b border-zinc-200 px-3 py-2 text-left text-sm text-zinc-700 transition-colors hover:bg-zinc-50 focus:bg-zinc-50 focus:outline-none dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900 dark:focus:bg-zinc-900';
                option.textContent = item;
                option.addEventListener('click', function () {
                    input.value = item;
                    autocomplete.hidden = true;
                    input.focus();
                });
                autocomplete.appendChild(option);
            });

            autocomplete.hidden = false;
        }

        var debounceId;
        input.addEventListener('input', function () {
            var value = input.value.trim().toLowerCase();
            window.clearTimeout(debounceId);

            if (!value) {
                autocomplete.hidden = true;
                return;
            }

            debounceId = window.setTimeout(function () {
                fetchSuggestions(suggestUrl, value).then(function (remoteSuggestions) {
                    var candidates = remoteSuggestions.slice();
                    if (SYNONYMS[value]) {
                        candidates = candidates.concat(SYNONYMS[value]);
                    }
                    openAutocomplete(Array.from(new Set(candidates)));
                });
            }, 180);
        });

        document.addEventListener('click', function (event) {
            if (!root.contains(event.target)) {
                autocomplete.hidden = true;
            }
        });

        form.addEventListener('submit', function () {
            var value = input.value.trim();
            if (!value) {
                return;
            }

            var recent = readLocalStorage(RECENT_SEARCHES_KEY, []);
            var next = upsertRecent(recent, value, 8);
            writeLocalStorage(RECENT_SEARCHES_KEY, next);
        });

        fetchSuggestions(suggestUrl, '').then(function (popularSuggestions) {
            if (!popularContainer) {
                return;
            }

            if (!popularSuggestions.length) {
                popularSuggestions = ['helm', 'windscherm', 'remblokken', 'telefoonhouder', 'regenhoes'];
            }

            renderChips(popularContainer, popularSuggestions.slice(0, 6), 'Populair:');
        });

        var recent = readLocalStorage(RECENT_SEARCHES_KEY, []);
        if (!recent.length) {
            recent = readLocalStorage(LEGACY_RECENT_SEARCHES_KEY, []);
        }
        if (recent.length && recentSearchList && recentSearchesWrap) {
            renderChips(recentSearchList, recent);
            recentSearchesWrap.hidden = false;
        }

        var viewed = readLocalStorage(RECENT_VIEWED_KEY, []);
        if (!viewed.length) {
            viewed = readLocalStorage(LEGACY_RECENT_VIEWED_KEY, []);
        }
        if (viewed.length && recentViewedList && recentViewedWrap) {
            recentViewedList.innerHTML = '';
            viewed.slice(0, 5).forEach(function (item) {
                var li = document.createElement('li');
                var link = document.createElement('a');
                link.className = 'text-[var(--color-text)] transition-colors hover:text-[var(--color-accent)]';
                link.href = item.url;
                link.textContent = item.name;
                li.appendChild(link);
                recentViewedList.appendChild(li);
            });
            recentViewedWrap.hidden = false;
        }
    }

    function captureViewedProduct() {
        if (!document.body.classList.contains('catalog-product-view')) {
            return;
        }

        var titleElement = document.querySelector('.page-title span') || document.querySelector('.page-title');
        var name = titleElement ? titleElement.textContent.trim() : document.title.trim();

        if (!name) {
            return;
        }

        var viewed = readLocalStorage(RECENT_VIEWED_KEY, []);
        var next = (viewed || []).filter(function (item) {
            return item && item.url !== window.location.href;
        });

        next.unshift({
            name: name,
            url: window.location.href
        });

        writeLocalStorage(RECENT_VIEWED_KEY, next.slice(0, 8));
    }

    document.addEventListener('DOMContentLoaded', function () {
        var searchRoot = document.querySelector('[data-catalogsearch-root]');
        if (searchRoot) {
            bindCatalogSearch(searchRoot);
        }

        captureViewedProduct();
    });
})();
