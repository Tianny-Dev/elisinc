<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

import { register } from '@/routes';
const imageSrc = computed(() => '/assets/images/technician/tech-img.jpg');
</script>

<template>
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="flex flex-col items-center gap-8 md:flex-row md:gap-12">
            <!-- Image -->
            <div class="w-full md:w-2/5">
                <div class="overflow-hidden rounded-3xl shadow-xl">
                    <img
                        :src="imageSrc"
                        alt="Technician working on EV"
                        class="h-75 w-full object-cover md:h-112.5"
                    />
                </div>
            </div>

            <!-- Content -->
            <div class="flex w-full flex-col items-start md:w-3/5">
                <!-- Label + Divider -->
                <div class="mb-2 flex w-full items-center gap-4">
                    <span
                        class="text-sm font-bold tracking-widest text-bright-green uppercase md:text-xl"
                    >
                        Technician
                    </span>
                    <div class="grow border-t-2 border-bright-green"></div>
                </div>

                <!-- Heading -->
                <h2
                    class="mb-6 text-3xl leading-tight font-bold text-bright-green md:text-5xl"
                >
                    Supporting Safe and
                    <br class="hidden md:block" />
                    Reliable Rides
                </h2>

                <!-- Description -->
                <div
                    class="mb-8 space-y-4 text-sm leading-relaxed text-gray-600 md:text-base"
                >
                    <p>
                        Technicians play a critical role in maintaining electric
                        vehicles. ELIS Inc. provides technicians with digital
                        tools to receive service requests, update repair
                        progress, log parts usage, and communicate efficiently
                        with operations coordinators.
                    </p>
                    <p>
                        This structured approach improves vehicle reliability,
                        reduces downtime, and ensures passenger safety.
                    </p>
                </div>

                <!-- CTA -->
                <Link
                    :href="register()"
                    class="rounded-lg bg-bright-green px-8 py-3 font-medium text-white transition-colors duration-300 hover:bg-dark-green"
                >
                    Join as a Technician
                </Link>
            </div>
        </div>
    </section>
</template>
