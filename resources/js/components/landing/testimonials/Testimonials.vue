<script setup lang="ts">
import { computed } from 'vue';

// Public assets (Vite)
const leftImage = computed(
    () => '/assets/images/testimonials/testimonials-img-1.png',
);
const rightImage = computed(
    () => '/assets/images/testimonials/testimonials-img-2.png',
);
</script>

<template>
    <section
        class="relative mt-10 flex min-h-50 w-full overflow-hidden md:min-h-62.5"
    >
        <!-- Background Images -->
        <div class="absolute inset-0 flex bg-bright-green">
            <div class="hidden h-full w-1/3 overflow-hidden md:block">
                <img
                    :src="leftImage"
                    class="h-full w-full object-cover opacity-80"
                    alt="Testimonial background left"
                    loading="lazy"
                />
            </div>

            <div class="flex-1 bg-bright-green"></div>

            <div class="hidden h-full w-1/3 overflow-hidden md:block">
                <img
                    :src="rightImage"
                    class="h-full w-full object-cover opacity-80"
                    alt="Testimonial background right"
                    loading="lazy"
                />
            </div>
        </div>

        <!-- Gradient Overlay -->
        <div
            class="absolute inset-0 z-10 bg-linear-to-r from-bright-green/20 via-bright-green/10 to-bright-green/20"
        />

        <!-- Content -->
        <div
            class="relative z-20 flex flex-1 flex-col items-center justify-center px-6 py-10 text-center text-white md:py-12"
        >
            <h2
                class="mb-4 text-2xl font-bold tracking-[0.2em] uppercase md:text-3xl"
            >
                Testimonials
            </h2>

            <p
                class="max-w-6xl px-4 text-sm leading-relaxed opacity-95 md:text-base"
            >
                Discover how <span class="font-bold">ELIS Inc.</span> is making
                a real impact on everyday electric mobility. Hear directly from
                our drivers, passengers, and partners as they share their
                experiences using our platform—from smoother daily operations to
                cleaner, quieter, and more reliable electric rides. These
                stories reflect our commitment to service quality, transparency,
                and sustainable transport for Filipino communities.
            </p>
        </div>
    </section>
</template>
