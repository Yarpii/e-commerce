<section class="relative overflow-hidden bg-white dark:bg-brew-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-[-10rem] left-[-8rem] w-[400px] h-[400px] bg-brew-accent/15 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-8rem] right-[-6rem] w-[350px] h-[350px] bg-brew-primary/10 blur-[100px] rounded-full"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 py-20 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-brew-accent via-brew-primary to-brew-deep bg-clip-text text-transparent">
            <?= htmlspecialchars($title ?? 'Contact') ?>
        </h1>
        <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto leading-relaxed">
            <?= htmlspecialchars($message ?? 'Get in touch with us.') ?>
        </p>
    </div>
</section>

<section class="relative overflow-hidden bg-base-100 dark:bg-brew-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <div class="relative z-10 max-w-2xl mx-auto px-6 py-16">
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-brew-dark/70 text-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-brew-accent/50 focus:border-brew-accent outline-none transition-all duration-200">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-brew-dark/70 text-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-brew-accent/50 focus:border-brew-accent outline-none transition-all duration-200">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                <textarea id="message" name="message" rows="5" required
                          class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-brew-dark/70 text-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-brew-accent/50 focus:border-brew-accent outline-none transition-all duration-200 resize-vertical"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                        class="px-8 py-2.5 rounded-lg bg-gradient-to-r from-brew-accent to-brew-primary text-white font-semibold hover:opacity-90 transition-opacity duration-200">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>
