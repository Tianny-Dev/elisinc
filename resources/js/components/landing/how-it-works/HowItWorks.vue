<script setup lang="ts">
import bgImage from '/public/assets/images/how-it-works/how-it-works-bg.png';
import img1 from '/public/assets/images/how-it-works/how-it-works-img1.jpg';
import img2 from '/public/assets/images/how-it-works/how-it-works-img2.jpg';
</script>

<template>
    <section class="relative overflow-hidden">
        <!-- Background -->
        <div
            class="relative bg-green-700"
            :style="`background-image: url(${bgImage}); background-size: cover; background-position: center;`"
        >
            <!-- Overlay -->
            <div class="absolute inset-0 bg-bright-green/20"></div>

            <div
                class="relative mx-auto max-w-7xl px-6 py-10 sm:py-12 lg:py-16"
            >
                <div
                    class="grid grid-cols-1 items-center gap-10 md:grid-cols-[1.6fr_1fr] lg:grid-cols-[1.75fr_1fr]"
                >
                    <!-- Text Content -->
                    <div class="text-white">
                        <span
                            class="mb-3 inline-block text-lg font-semibold tracking-wide uppercase sm:text-xl"
                        >
                            How It Works
                        </span>

                        <div
                            class="mb-4 flex items-center gap-2 text-base font-bold text-bright-green sm:text-lg"
                        >
                            <span class="rounded-full bg-white px-2.5 py-0.5"
                                >1</span
                            >
                            <span class="font-black text-white/70">-</span>
                            <span class="rounded-full bg-white px-2.5 py-0.5"
                                >2</span
                            >
                            <span class="font-black text-white/70">-</span>
                            <span class="rounded-full bg-white px-2.5 py-0.5"
                                >3</span
                            >
                        </div>

                        <h2
                            class="mb-4 text-lg font-bold sm:text-xl lg:text-2xl"
                        >
                            Step-by-Step Experience
                        </h2>

                        <p
                            class="max-w-2xl font-noto text-sm leading-relaxed text-white/90 sm:text-base"
                        >
                            Users begin by choosing their role on the ELIS Inc.
                            platform. Registration requires basic personal and
                            professional information along with document
                            submission for security and compliance. Once
                            verified, users can log in to their dashboard where
                            all daily activities are managed digitally. Trips,
                            earnings, maintenance updates, and ride bookings are
                            processed in real time, ensuring accuracy and
                            accountability.
                        </p>
                    </div>

                    <!-- Images -->
                    <div
                        class="flex justify-center gap-4 sm:gap-6 md:justify-end"
                    >
                        <img
                            :src="img1"
                            alt="How It Works 1"
                            class="h-52 rounded-2xl object-cover shadow-lg sm:h-60 md:h-64 lg:h-72"
                        />
                        <img
                            :src="img2"
                            alt="How It Works 2"
                            class="h-52 rounded-2xl object-cover shadow-lg sm:h-60 md:h-64 lg:h-72"
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Note -->
        <div class="bg-white px-6 py-6 text-center">
            <p class="text-xs text-bright-green sm:text-sm">
                The system is designed to minimize manual work while improving
                coordination and visibility for everyone involved.
            </p>
        </div>
    </section>
</template>
