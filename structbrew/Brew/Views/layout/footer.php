<!-- USP Bar -->
<div class="border-t border-[var(--color-border)] bg-[var(--color-surface)]">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex items-start gap-3 p-3 rounded-card border border-[var(--color-border)] bg-[var(--color-bg)]">
                <div class="shrink-0 w-9 h-9 rounded-lg bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)]">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[var(--color-text)]">Free Shipping</p>
                    <p class="text-xs text-[var(--color-muted)]">On orders over $50</p>
                </div>
            </div>
            <div class="flex items-start gap-3 p-3 rounded-card border border-[var(--color-border)] bg-[var(--color-bg)]">
                <div class="shrink-0 w-9 h-9 rounded-lg bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)]">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[var(--color-text)]">Secure Payment</p>
                    <p class="text-xs text-[var(--color-muted)]">SSL encrypted checkout</p>
                </div>
            </div>
            <div class="flex items-start gap-3 p-3 rounded-card border border-[var(--color-border)] bg-[var(--color-bg)]">
                <div class="shrink-0 w-9 h-9 rounded-lg bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)]">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[var(--color-text)]">Easy Returns</p>
                    <p class="text-xs text-[var(--color-muted)]">30-day return policy</p>
                </div>
            </div>
            <div class="flex items-start gap-3 p-3 rounded-card border border-[var(--color-border)] bg-[var(--color-bg)]">
                <div class="shrink-0 w-9 h-9 rounded-lg bg-[var(--color-accent)]/10 flex items-center justify-center text-[var(--color-accent)]">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[var(--color-text)]">24/7 Support</p>
                    <p class="text-xs text-[var(--color-muted)]">Dedicated help center</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Footer -->
<footer class="border-t border-[var(--color-border)] bg-zinc-900 text-gray-300">
    <div class="mx-auto w-[92%] sm:w-[90%] md:w-[88%] lg:w-[85%] py-12">
        <!-- Top: Logo + Newsletter + Links -->
        <div class="grid gap-10 lg:grid-cols-[1fr_2fr]">
            <!-- Brand + Newsletter -->
            <div>
                <a href="/" class="flex items-center gap-2.5 mb-4">
                    <div class="w-9 h-9 rounded-lg bg-[var(--color-accent)] flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                    </div>
                    <span class="text-lg font-bold text-white">Struct<span class="text-[var(--color-accent)]">brew</span></span>
                </a>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">
                    Your one-stop shop for premium tech and accessories. Quality products, fast shipping, and outstanding support.
                </p>
                <form class="flex gap-2" x-data="{ email: '' }" @submit.prevent="email = ''; alert('Thanks for subscribing!')">
                    <input type="email" x-model="email" required placeholder="Your email address" class="h-10 flex-1 rounded-[var(--radius-input)] border border-white/20 bg-white/10 px-3.5 text-sm text-white placeholder-gray-400 focus:border-[var(--color-accent)] focus:ring-1 focus:ring-[var(--color-accent)]">
                    <button type="submit" class="h-10 rounded-[var(--radius-button)] bg-[var(--color-accent)] px-4 text-sm font-semibold text-white transition hover:bg-[var(--color-accent-hover)]">Subscribe</button>
                </form>
            </div>

            <!-- Link Columns -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-white mb-3">Shop</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/shop" class="text-gray-400 hover:text-white transition-colors">All Products</a></li>
                        <li><a href="/shop?category=electronics" class="text-gray-400 hover:text-white transition-colors">Electronics</a></li>
                        <li><a href="/shop?category=audio" class="text-gray-400 hover:text-white transition-colors">Audio</a></li>
                        <li><a href="/shop?category=gaming" class="text-gray-400 hover:text-white transition-colors">Gaming</a></li>
                        <li><a href="/shop?category=wearables" class="text-gray-400 hover:text-white transition-colors">Wearables</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white mb-3">Account</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/login" class="text-gray-400 hover:text-white transition-colors">Login</a></li>
                        <li><a href="/register" class="text-gray-400 hover:text-white transition-colors">Register</a></li>
                        <li><a href="/cart" class="text-gray-400 hover:text-white transition-colors">Shopping Cart</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white mb-3">Support</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom -->
        <div class="mt-10 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-gray-500">&copy; <?= date('Y') ?> Structbrew Store. All rights reserved. Powered by Structbrew Framework.</p>
            <div class="flex items-center gap-3 text-gray-500">
                <svg width="32" height="20" viewBox="0 0 32 20" fill="currentColor"><rect width="32" height="20" rx="3" opacity=".15"/><text x="16" y="14" text-anchor="middle" font-size="8" font-weight="600" fill="currentColor">VISA</text></svg>
                <svg width="32" height="20" viewBox="0 0 32 20" fill="currentColor"><rect width="32" height="20" rx="3" opacity=".15"/><text x="16" y="14" text-anchor="middle" font-size="7" font-weight="600" fill="currentColor">MC</text></svg>
                <svg width="32" height="20" viewBox="0 0 32 20" fill="currentColor"><rect width="32" height="20" rx="3" opacity=".15"/><text x="16" y="14" text-anchor="middle" font-size="6" font-weight="600" fill="currentColor">PayPal</text></svg>
                <svg width="32" height="20" viewBox="0 0 32 20" fill="currentColor"><rect width="32" height="20" rx="3" opacity=".15"/><text x="16" y="14" text-anchor="middle" font-size="6" font-weight="600" fill="currentColor">Klarna</text></svg>
            </div>
        </div>
    </div>
</footer>
