<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 text-white">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[var(--color-accent)] rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-blue-500 rounded-full blur-[100px]"></div>
    </div>
    <div class="relative mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-16 md:py-24">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 rounded-full bg-[var(--color-accent)]/15 border border-[var(--color-accent)]/30 px-3.5 py-1 text-sm text-[var(--color-accent)] font-medium mb-6">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                New arrivals are here
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.1]">
                Tech that moves<br>
                <span class="bg-gradient-to-r from-[var(--color-accent)] to-orange-400 bg-clip-text text-transparent">with you.</span>
            </h1>
            <p class="mt-5 text-lg text-gray-300 leading-relaxed max-w-lg">
                Discover premium electronics, audio gear, and accessories. Curated for quality, built for everyday life.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/shop" class="inline-flex h-12 items-center gap-2 rounded-[var(--radius-button)] bg-[var(--color-accent)] px-6 text-sm font-semibold text-white transition hover:bg-[var(--color-accent-hover)]">
                    Shop Now
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="/shop?category=audio" class="inline-flex h-12 items-center gap-2 rounded-[var(--radius-button)] border border-white/25 bg-white/10 px-6 text-sm font-semibold text-white transition hover:bg-white/20">
                    Browse Audio
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Categories -->
<section class="bg-[var(--color-bg)]">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-12">
        <h2 class="text-2xl font-bold text-[var(--color-text)] mb-6">Shop by Category</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
            <?php
            $icons = [
                'electronics' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
                'audio'       => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>',
                'accessories' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
                'wearables'   => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="7"/><polyline points="12 9 12 12 13.5 13.5"/><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"/></svg>',
                'home'        => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                'gaming'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="12" x2="10" y2="12"/><line x1="8" y1="10" x2="8" y2="14"/><line x1="15" y1="13" x2="15.01" y2="13"/><line x1="18" y1="11" x2="18.01" y2="11"/><rect x="2" y="6" width="20" height="12" rx="2"/></svg>',
            ];
            foreach ($categories as $key => $name): ?>
                <a href="/shop?category=<?= htmlspecialchars($key) ?>" class="group flex flex-col items-center gap-2 rounded-[var(--radius-card)] border border-[var(--color-border)] bg-[var(--color-surface)] p-4 transition hover:border-[var(--color-accent)]/40 hover:shadow-md hover:-translate-y-0.5">
                    <div class="w-12 h-12 rounded-xl bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)] group-hover:bg-[var(--color-accent)] group-hover:text-white transition-colors">
                        <?= $icons[$key] ?? '' ?>
                    </div>
                    <span class="text-sm font-medium text-[var(--color-text)]"><?= htmlspecialchars($name) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="bg-[var(--color-surface)]">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-12">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-[var(--color-text)]">Featured Products</h2>
            <a href="/shop" class="text-sm font-semibold text-[var(--color-accent)] hover:underline flex items-center gap-1">
                View All
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
        <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php foreach ($featured as $product): ?>
                <div class="product-card group rounded-[var(--radius-card)] border border-[var(--color-border)] bg-[var(--color-surface)] overflow-hidden transition-all duration-200" style="box-shadow: var(--shadow-sm)">
                    <a href="/shop/<?= htmlspecialchars($product['slug']) ?>" class="block relative aspect-square bg-[var(--color-bg)] overflow-hidden">
                        <div class="product-img w-full h-full flex items-center justify-center transition-transform duration-300">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-[var(--color-accent)]/20 to-[var(--color-accent)]/5 flex items-center justify-center">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity=".6"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            </div>
                        </div>
                        <?php if ($product['badge']): ?>
                            <span class="absolute top-2.5 left-2.5 rounded-full px-2.5 py-0.5 text-xs font-semibold
                                <?= $product['badge'] === 'Sale' ? 'bg-[var(--color-accent)] text-white' : '' ?>
                                <?= $product['badge'] === 'New' ? 'bg-emerald-500 text-white' : '' ?>
                                <?= $product['badge'] === 'Bestseller' ? 'bg-amber-500 text-white' : '' ?>
                                <?= $product['badge'] === 'Popular' ? 'bg-blue-500 text-white' : '' ?>
                                <?= $product['badge'] === 'Out of Stock' ? 'bg-gray-500 text-white' : '' ?>
                            "><?= htmlspecialchars($product['badge']) ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="p-3.5">
                        <p class="text-xs text-[var(--color-muted)] uppercase tracking-wide mb-1"><?= htmlspecialchars($categories[$product['category']] ?? $product['category']) ?></p>
                        <a href="/shop/<?= htmlspecialchars($product['slug']) ?>" class="block text-sm font-semibold text-[var(--color-text)] leading-snug hover:text-[var(--color-accent)] transition-colors line-clamp-2">
                            <?= htmlspecialchars($product['name']) ?>
                        </a>
                        <div class="flex items-center gap-1 mt-1.5">
                            <div class="flex text-amber-400">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="<?= $i < round($product['rating']) ? 'currentColor' : 'none' ?>" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <?php endfor; ?>
                            </div>
                            <span class="text-xs text-[var(--color-muted)]">(<?= $product['reviews'] ?>)</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-baseline gap-1.5">
                                <?php if ($product['sale_price']): ?>
                                    <span class="text-base font-bold text-[var(--color-accent)]">$<?= number_format($product['sale_price'], 2) ?></span>
                                    <span class="text-xs text-[var(--color-muted)] line-through">$<?= number_format($product['price'], 2) ?></span>
                                <?php else: ?>
                                    <span class="text-base font-bold text-[var(--color-text)]">$<?= number_format($product['price'], 2) ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($product['in_stock']): ?>
                                <button
                                    @click="$store.cart.add({id: <?= $product['id'] ?>, name: '<?= addslashes($product['name']) ?>', price: <?= $product['price'] ?>, sale_price: <?= $product['sale_price'] ?? 'null' ?>, slug: '<?= $product['slug'] ?>'})"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-[var(--radius-button)] bg-[var(--color-accent)] text-white transition hover:bg-[var(--color-accent-hover)]"
                                    title="Add to cart"
                                >
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sale Banner -->
<section class="bg-gradient-to-r from-[var(--color-accent)] to-orange-500 text-white">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight">Don't miss our deals</h2>
            <p class="mt-2 text-white/85 text-base">Save up to 40% on selected items. Limited time only.</p>
        </div>
        <a href="/shop?sort=price_asc" class="inline-flex h-12 items-center gap-2 rounded-[var(--radius-button)] bg-white text-[var(--color-accent)] px-6 text-sm font-bold transition hover:bg-gray-100 shrink-0">
            Shop Sale
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-[var(--color-bg)]">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-14">
        <h2 class="text-2xl font-bold text-center text-[var(--color-text)] mb-8">Why Structbrew Store?</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="text-center rounded-[var(--radius-card)] border border-[var(--color-border)] bg-[var(--color-surface)] p-6">
                <div class="mx-auto w-14 h-14 rounded-2xl bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)] mb-4">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-[var(--color-text)] mb-2">Curated Quality</h3>
                <p class="text-sm text-[var(--color-muted)] leading-relaxed">Every product is handpicked and tested to ensure it meets our quality standards before it reaches you.</p>
            </div>
            <div class="text-center rounded-[var(--radius-card)] border border-[var(--color-border)] bg-[var(--color-surface)] p-6">
                <div class="mx-auto w-14 h-14 rounded-2xl bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)] mb-4">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-[var(--color-text)] mb-2">Fast Delivery</h3>
                <p class="text-sm text-[var(--color-muted)] leading-relaxed">Free shipping on orders over $50. Most orders ship same day and arrive within 2-3 business days.</p>
            </div>
            <div class="text-center rounded-[var(--radius-card)] border border-[var(--color-border)] bg-[var(--color-surface)] p-6">
                <div class="mx-auto w-14 h-14 rounded-2xl bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)] mb-4">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-[var(--color-text)] mb-2">Trusted & Secure</h3>
                <p class="text-sm text-[var(--color-muted)] leading-relaxed">SSL-encrypted payments, 30-day money-back guarantee, and dedicated customer support for peace of mind.</p>
            </div>
        </div>
    </div>
</section>
