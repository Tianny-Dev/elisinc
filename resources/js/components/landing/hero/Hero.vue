<script setup lang="ts">
import { computed } from 'vue';

import heroBg from '/public/assets/images/hero/hero-bg.jpg';

const heroStyle = computed(() => ({
    backgroundImage: `url(${heroBg})`,
}));
</script>

<template>
    <section
        class="bg-cover bg-center px-2 py-26 md:px-0"
        :style="heroStyle"
        id="home"
    >
        <div class="container mx-auto max-w-7xl px-8 xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:px-3">
                    <div
                        class="w-full space-y-6 pb-6 sm:max-w-md sm:pr-5 md:space-y-4 md:pb-0 lg:max-w-4xl lg:space-y-8 lg:pr-0 xl:space-y-6"
                    >
                        <h1
                            class="text-4xl leading-tight font-extrabold tracking-tight text-white sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                        >
                            <span class="block">
                                Powering Everyday Travel with Clean Electric
                                Mobility
                            </span>
                        </h1>

                        <p
                            class="text-base text-gray-100 sm:max-w-md md:max-w-4xl lg:text-xl"
                        >
                            ELIS Inc. delivers modern electric transportation
                            solutions built for Filipino communities. From
                            E-Tricycles to electric taxis, we connect drivers,
                            technicians, and passengers through a secure and
                            easy-to-use digital platform that supports safe,
                            reliable, and eco-friendly travel.
                        </p>

                        <div
                            class="relative flex flex-col sm:flex-row sm:space-x-4"
                        >
                            <a
                                href="#"
                                class="mb-3 flex w-full items-center rounded-md border border-white px-6 py-3 text-lg text-white transition-all hover:bg-white hover:text-dark-green sm:mb-0 sm:w-auto"
                            >
                                Book a Ride
                            </a>

                            <a
                                href="#"
                                class="flex items-center rounded-md bg-gray-100 px-6 py-3 text-dark-green hover:bg-gray-200 hover:text-gray-600"
                            >
                                Become a Driver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
