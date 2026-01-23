<template>
    <footer>
        <!-- Main footer -->
        <div class="bg-dark-green py-12 text-white">
            <div class="mx-auto max-w-7xl px-6">
                <div
                    class="grid grid-cols-1 items-start gap-12 md:grid-cols-2 lg:grid-cols-4"
                >
                    <!-- Logo / Tagline -->
                    <div class="space-y-4 lg:col-span-2">
                        <div class="flex flex-col">
                            <img
                                src="/assets/images/footer/logo-footer.png"
                                alt="ELIS INC. Logo"
                                class="h-16 w-auto self-start object-contain"
                            />
                            <p
                                class="mt-2 text-sm font-medium tracking-wide text-white italic"
                            >
                                "Greening the Future of Mobility."
                            </p>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="lg:col-span-2">
                        <h4
                            class="mb-6 text-lg font-bold tracking-widest uppercase"
                        >
                            Quick Links:
                        </h4>

                        <div
                            class="grid grid-cols-2 gap-x-8 gap-y-4 text-sm md:grid-cols-3"
                        >
                            <Link
                                v-for="link in links"
                                :key="link.label"
                                :href="link.href"
                                class="transition-colors hover:text-bright-green"
                            >
                                {{ link.label }}
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="bg-bright-green px-6 py-4">
            <div
                class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 text-xs font-medium text-white md:flex-row md:text-sm"
            >
                <p>© {{ currentYear }} ELIS Inc. All Rights Reserved.</p>

                <p class="text-center md:text-right">
                    Designed &amp; Developed by:
                    <a
                        href="https://bb88advertising.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="font-bold uppercase hover:underline"
                    >
                        BB BB Advertising and Digital Solutions Inc.
                    </a>
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface FooterLink {
    label: string;
    href: string;
}

const links: FooterLink[] = [
    { label: 'Home', href: '/' },
    { label: 'Services', href: '/services' },
    { label: 'Passengers', href: '/passengers' },

    { label: 'About Us', href: '/about' },
    { label: 'Drivers', href: '/drivers' },
    { label: 'Testimonials', href: '/testimonials' },

    { label: 'How It Works', href: '/how-it-works' },
    { label: 'Technicians', href: '/technicians' },
    { label: 'Contact Us', href: '/contact' },
];

const currentYear = new Date().getFullYear();
</script>
