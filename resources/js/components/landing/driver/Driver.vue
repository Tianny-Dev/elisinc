<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

import { register } from '@/routes';

const backgroundImage = computed(
    () => `/assets/images/driver/driver-bg-img.png`,
);
</script>

<template>
    <section
        class="relative bg-cover bg-center px-2 py-26 md:px-0"
        :style="{ backgroundImage: `url(${backgroundImage})` }"
    >
        <!-- Overlay -->
        <div class="absolute inset-0 bg-bright-green/70"></div>

        <!-- Content -->
        <div
            class="relative z-10 container mx-auto max-w-7xl items-center px-8 xl:px-5"
        >
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:px-3">
                    <div
                        class="w-full space-y-6 pb-6 sm:max-w-md sm:pr-5 md:space-y-4 md:pb-0 lg:max-w-4xl lg:space-y-8 lg:pr-0 xl:space-y-6"
                    >
                        <!-- Label -->
                        <span
                            class="mb-3 inline-block text-lg font-semibold tracking-wide text-white uppercase sm:text-2xl"
                        >
                            Driver
                        </span>

                        <!-- Title -->
                        <h1
                            class="text-4xl leading-tight font-extrabold tracking-tight text-white sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                        >
                            Drive with Confidence
                        </h1>

                        <!-- Paragraphs -->
                        <p
                            class="text-base text-gray-100 sm:max-w-md md:max-w-4xl lg:text-xl"
                        >
                            ELIS Inc. offers drivers a modern way to manage
                            daily work without paperwork or guesswork. Through
                            the mobile app, drivers can view assigned vehicles,
                            monitor completed trips, track earnings, receive
                            notifications, and access training or support
                            resources.
                        </p>

                        <p
                            class="text-base text-gray-100 sm:max-w-md md:max-w-4xl lg:text-xl"
                        >
                            The system promotes fairness and clarity by
                            providing accurate income records and clear
                            operational updates, helping drivers focus on safe
                            and professional driving.
                        </p>

                        <!-- CTA -->
                        <div
                            class="relative flex flex-col sm:flex-row sm:space-x-4"
                        >
                            <Link
                                :href="register()"
                                class="flex cursor-pointer items-center rounded-md bg-gray-100 px-6 py-3 text-dark-green transition hover:bg-gray-200 hover:text-gray-600"
                            >
                                Register as a Driver
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
