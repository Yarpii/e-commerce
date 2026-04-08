<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Structbrew') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brew: {
                            light: '#E8F6FF',
                            base: '#F5FAFF',
                            dark: '#0D1726',
                            text: '#1E293B',
                            accent: '#0284C7',
                            primary: '#06B6D4',
                            deep: '#0EA5E9',
                        },
                    },
                    fontFamily: {
                        sans: ['Manrope', 'Inter', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(2, 132, 199, 0.1)',
                    }
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-brew-base dark:bg-brew-dark text-brew-text dark:text-gray-200 transition-colors duration-300">
<header class="flex items-center justify-between px-5 py-3 border-b border-gray-200 dark:border-gray-700 bg-white/80 dark:bg-brew-dark/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50 shadow-sm">
    <div class="flex items-center gap-2 select-none">
        <img src="/assets/dark_icon.png" alt="Structbrew Logo" class="h-8 w-auto dark:hidden">
        <img src="/assets/light_icon.png" alt="Structbrew Logo" class="h-8 w-auto hidden dark:inline-block">
        <h1 class="text-lg font-semibold tracking-wide flex items-baseline">
            <span class="text-gray-700 dark:text-gray-300">Struct</span>
            <span class="bg-gradient-to-r from-brew-accent to-brew-primary bg-clip-text text-transparent font-semibold ml-0.5">brew</span>
        </h1>
    </div>
    <nav class="hidden lg:flex items-center gap-6 text-sm">
        <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-brew-primary transition-colors">Home</a>
        <a href="/about" class="text-gray-700 dark:text-gray-300 hover:text-brew-primary transition-colors">About</a>
    </nav>
    <div class="flex items-center gap-3">
        <button id="themeToggle" class="w-8 h-8 flex items-center justify-center rounded-md border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
            <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-brew-primary dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 3v1m0 16v1m8.66-9H21M3 12H2m15.364 6.364l.707.707M6.343 6.343l-.707-.707M17.657 6.343l.707-.707M6.343 17.657l-.707.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
            </svg>
            <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 hidden dark:block text-brew-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21.64 13a1 1 0 00-1.05-.14 8 8 0 11-9.55-9.55A1 1 0 0012 4a10.14 10.14 0 1010.14 9.05 1 1 0 00-.5-.1z" />
            </svg>
        </button>
    </div>
</header>
<main class="pt-[4rem] pb-[3rem] px-4 overflow-auto min-h-screen bg-brew-base dark:bg-brew-dark transition-colors duration-300">
    <?= $content ?>
</main>
<footer class="fixed left-0 right-0 bottom-0 h-[2.5rem] border-t border-gray-200 dark:border-gray-700 bg-white/80 dark:bg-brew-dark/80 text-xs flex items-center justify-center text-gray-500 dark:text-gray-400 backdrop-blur-sm">
    © <?= date('Y') ?> Structbrew • Powered by Volt ⚡
</footer>
<script>
    const toggle = document.getElementById('themeToggle');
    const html = document.documentElement;
    toggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    });
    if (localStorage.getItem('theme') === 'dark') html.classList.add('dark');
</script>
</body>
</html>