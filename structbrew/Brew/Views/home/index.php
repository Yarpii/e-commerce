<section class="relative overflow-hidden bg-white dark:bg-brew-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute top-[-10rem] left-[-10rem] w-[500px] h-[500px] bg-brew-accent/20 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[-8rem] right-[-8rem] w-[350px] h-[350px] bg-brew-primary/15 blur-[100px] rounded-full animate-pulse-slow" style="animation-delay:2s;"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight bg-gradient-to-r from-brew-accent via-brew-primary to-brew-deep bg-clip-text text-transparent leading-tight">
            Structbrew Framework
        </h1>
        <p class="mt-5 text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed max-w-2xl mx-auto font-normal">
            Structbrew is a <strong>living PHP framework</strong> — a modular, evolving system where your code, structure, and tools grow together as one.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-3">
            <a href="/about" class="group px-6 py-2.5 rounded-md text-sm font-semibold text-white bg-gradient-to-r from-brew-accent to-brew-primary hover:opacity-90 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center gap-2">
                ⚡ <span>Get Started</span>
            </a>
            <a href="/contact" class="group px-6 py-2.5 rounded-md text-sm font-semibold border border-brew-accent/40 text-brew-accent dark:text-brew-primary hover:bg-brew-accent/10 transition-all duration-300 flex items-center gap-2">
                💬 <span>Contact</span>
            </a>
        </div>
        <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
            <?php foreach ($features as $f): ?>
                <div class="group bg-white/80 dark:bg-brew-dark/60 border border-gray-200 dark:border-gray-700 rounded-xl p-5 hover:border-brew-accent/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brew-accent/15 to-brew-primary/15 flex items-center justify-center">
                            <span class="text-brew-accent">⚙️</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100 text-base"><?= htmlspecialchars($f) ?></h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        <?= match ($f) {
                            'Zero-dependency Core Architecture' => 'Built on pure PHP — no Composer clutter, no external overhead.',
                            'Simple Routing & Controllers' => 'Clean routes and controllers that stay readable even as you scale.',
                            'Clean View Engine with dot-notation' => 'Views that map intuitively to folders, no magic paths required.',
                            'Built-in Request / Response abstraction' => 'A modern HTTP layer that keeps logic organized and explicit.',
                            'Fast JSON API Support' => 'High-performance JSON responses, optimized for modern frontends.',
                            'Human-readable Logs & Structure' => 'Readable logs that mirror your system’s structure — clarity by design.',
                            default => '',
                        } ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="relative overflow-hidden bg-gradient-to-br from-brew-base/40 to-white dark:from-brew-dark dark:to-brew-dark/90 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <div class="absolute inset-0 -z-10">
        <div class="absolute bottom-[-8rem] left-[-6rem] w-[350px] h-[350px] bg-brew-primary/10 blur-[100px] rounded-full"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-brew-accent via-brew-primary to-brew-deep bg-clip-text text-transparent">
                Boot Your System in Seconds
            </h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400 text-base max-w-xl mx-auto">
                Structbrew initializes like a living organism — no dependencies, no Composer maze, just pure PHP.
            </p>
        </div>
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div class="bg-brew-dark/90 rounded-2xl p-1 shadow-lg hover:shadow-brew-accent/20 transition-all">
                <div class="bg-brew-dark rounded-xl p-5 font-mono text-xs">
                    <div class="flex items-center gap-2 mb-3 text-gray-500 text-xs">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-400"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-green-400"></span>
                        <span class="ml-2 text-gray-400">volt-terminal</span>
                    </div>
                    <pre class="text-gray-200 leading-relaxed overflow-x-auto">
<code>
$ php volt build
<span class="text-brew-primary">[INFO]</span> ⚙️  Initializing Structbrew Core...
<span class="text-brew-primary">[OK]</span>   Cortex, Muscle, and Flow layers registered
<span class="text-brew-primary">[OK]</span>   Manifest synced → /brew/runtime/manifest.json
<span class="text-brew-primary">[OK]</span>   System integrity verified
<span class="text-green-400">✅  Structbrew ready — serving on http://localhost:8080</span>

$ php volt serve
<span class="text-green-400">🚀  Boot complete! Listening for requests...</span>
</code>
</pre>
                </div>
            </div>
            <div class="space-y-5">
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-brew-accent to-brew-primary flex items-center justify-center text-white text-xs font-bold flex-shrink-0">1</div>
                    <div>
                        <h3 class="font-semibold text-base">Unpack the Framework</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Place the <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded text-brew-primary">/brew</code> and <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded text-brew-primary">/public</code> folders in your environment — no installation required.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-brew-accent to-brew-primary flex items-center justify-center text-white text-xs font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="font-semibold text-base">Initialize with Volt</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Run <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded text-brew-primary">php volt build</code> to generate your system layers — Cortex, Muscle, Flow, and Cells.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-brew-accent to-brew-primary flex items-center justify-center text-white text-xs font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="font-semibold text-base">Serve & Observe</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Start the internal server via <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded text-brew-primary">php volt serve</code>.
                            Volt automatically tracks routes, logs, and live system integrity.
                        </p>
                    </div>
                </div>
                <div class="mt-6 p-5 bg-white/80 dark:bg-brew-dark/60 rounded-xl border border-brew-accent/20 text-sm">
                    <p class="text-gray-600 dark:text-gray-400">
                        <strong class="text-brew-accent dark:text-brew-primary">Tip:</strong>
                        Run <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded text-brew-accent">php volt manifest</code>
                        to inspect every active layer and file Structbrew maintains.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative overflow-hidden bg-white dark:bg-brew-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-[20%] left-[10%] w-[400px] h-[400px] bg-brew-accent/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] right-[10%] w-[300px] h-[300px] bg-brew-primary/10 blur-[100px] rounded-full"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-brew-accent via-brew-primary to-brew-deep bg-clip-text text-transparent">
                Why Structbrew
            </h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400 text-base max-w-2xl mx-auto leading-relaxed">
                Structbrew is built on the principle that code should breathe, adapt, and grow.
                Every project becomes a living system — structured, transparent, and endlessly evolvable.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group flex flex-col items-center text-center bg-white/80 dark:bg-brew-dark/60 border border-gray-200 dark:border-gray-700 rounded-xl p-6 hover:border-brew-accent/40 hover:shadow-lg transition-all duration-300">
                <div class="w-14 h-14 mb-4 rounded-xl bg-gradient-to-br from-brew-accent/20 to-brew-primary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                    🚀
                </div>
                <h3 class="font-semibold text-base mb-2">Fast & Lightweight</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Zero dependencies, instant load. Structbrew runs on pure PHP — small footprint, big performance.
                </p>
            </div>
            <div class="group flex flex-col items-center text-center bg-white/80 dark:bg-brew-dark/60 border border-gray-200 dark:border-gray-700 rounded-xl p-6 hover:border-brew-accent/40 hover:shadow-lg transition-all duration-300">
                <div class="w-14 h-14 mb-4 rounded-xl bg-gradient-to-br from-brew-accent/20 to-brew-primary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                    🧩
                </div>
                <h3 class="font-semibold text-base mb-2">Modular by Design</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Each layer — Cortex, Muscle, Flow, Cells — is optional, replaceable, and independently aware.
                </p>
            </div>
            <div class="group flex flex-col items-center text-center bg-white/80 dark:bg-brew-dark/60 border border-gray-200 dark:border-gray-700 rounded-xl p-6 hover:border-brew-accent/40 hover:shadow-lg transition-all duration-300">
                <div class="w-14 h-14 mb-4 rounded-xl bg-gradient-to-br from-brew-accent/20 to-brew-primary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                    🔧
                </div>
                <h3 class="font-semibold text-base mb-2">Developer-First Flow</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Simple APIs, clear architecture. Every line of code stays visible, intentional, and under your control.
                </p>
            </div>
            <div class="group flex flex-col items-center text-center bg-white/80 dark:bg-brew-dark/60 border border-gray-200 dark:border-gray-700 rounded-xl p-6 hover:border-brew-accent/40 hover:shadow-lg transition-all duration-300">
                <div class="w-14 h-14 mb-4 rounded-xl bg-gradient-to-br from-brew-accent/20 to-brew-primary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                    🌱
                </div>
                <h3 class="font-semibold text-base mb-2">Evolves Organically</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    From prototype to production, Structbrew grows with your ideas — never against them.
                </p>
            </div>
        </div>
        <div class="mt-16 text-center text-gray-500 dark:text-gray-400 text-sm">
            Built for creators who see code not as files — but as evolving systems.
        </div>
    </div>
</section>