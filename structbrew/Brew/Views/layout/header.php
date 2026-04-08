<header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-5 py-3 bg-white/80 dark:bg-brew-dark/80 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700 shadow-sm">

    <!-- LEFT: Logo + Brand -->
    <a href="/" class="flex items-center gap-2 select-none">
        <!-- Brew icon -->
        <div class="w-8 h-8 rounded-md bg-gradient-to-br from-sky-400 to-cyan-500 flex items-center justify-center shadow-sm">
            <span class="text-white font-bold text-sm">⚗️</span>
        </div>

        <!-- Text logo -->
        <h1 class="text-lg font-semibold tracking-wide flex items-baseline">
            <span class="text-gray-800 dark:text-gray-200">Struct</span>
            <span class="bg-gradient-to-r from-sky-400 to-cyan-300 bg-clip-text text-transparent ml-0.5">brew</span>
        </h1>
    </a>

    <!-- CENTER: Navigation (desktop) -->
    <nav class="hidden lg:flex items-center gap-6 text-sm">
        <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-brew-primary transition-colors duration-200">Home</a>
        <a href="/about" class="text-gray-700 dark:text-gray-300 hover:text-brew-primary transition-colors duration-200">About</a>
    </nav>

    <!-- RIGHT: Theme toggle + Mobile -->
    <div class="flex items-center gap-3">
        <!-- Theme toggle -->
        <button id="themeToggle" class="w-8 h-8 flex items-center justify-center rounded-md border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
            <!-- Sun icon -->
            <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-sky-500 dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 3v1m0 16v1m8.66-9H21M3 12H2m15.364 6.364l.707.707M6.343 6.343l-.707-.707M17.657 6.343l.707-.707M6.343 17.657l-.707.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
            </svg>
            <!-- Moon icon -->
            <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 hidden dark:block text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21.64 13a1 1 0 00-1.05-.14 8 8 0 11-9.55-9.55A1 1 0 0012 4a10.14 10.14 0 1010.14 9.05 1 1 0 00-.5-.1z" />
            </svg>
        </button>

        <!-- Mobile menu button -->
        <button id="menuToggle" class="w-8 h-8 flex items-center justify-center rounded-md border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 lg:hidden transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile dropdown -->
    <div id="mobileMenu" class="hidden absolute top-full right-5 mt-2 w-48 bg-white dark:bg-brew-dark border border-gray-200 dark:border-gray-700 rounded-md shadow-lg p-3">
        <a href="/" class="block py-1.5 px-2 text-gray-700 dark:text-gray-300 hover:text-brew-primary">Home</a>
        <a href="/about" class="block py-1.5 px-2 text-gray-700 dark:text-gray-300 hover:text-brew-primary">About</a>
    </div>
</header>

<!-- Theme + Mobile Toggle Script -->
<script>
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    // Theme toggle
    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    });
    if (localStorage.getItem('theme') === 'dark') html.classList.add('dark');

    // Mobile menu
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
