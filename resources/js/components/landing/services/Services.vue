<script setup lang="ts">
import CoreServices from '@/components/landing/services/CoreServices.vue';
</script>

<template>
    <section class="py-4">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Section Divider Title -->
            <div class="flex items-center">
                <div class="grow border-t-2 border-bright-green"></div>

                <span
                    class="mx-4 shrink text-2xl font-bold tracking-widest text-bright-green uppercase"
                >
                    Services
                </span>

                <div class="grow border-t-2 border-bright-green"></div>
            </div>

            <!-- Intro Text -->
            <div
                class="mx-auto flex max-w-7xl flex-col items-center justify-center py-10 text-center"
            >
                <h3 class="mb-4 text-3xl font-bold text-bright-green">
                    Electric Mobility Services
                </h3>

                <p class="mb-4 text-base leading-relaxed text-gray-700">
                    ELIS Inc. provides end-to-end digital support for electric
                    transport operations. Our services cover trip monitoring,
                    income tracking, ride booking, vehicle condition reporting,
                    and maintenance coordination. All services are optimized for
                    electric vehicles, including E-Tricycles, ensuring efficient
                    use of battery-powered transport.
                </p>

                <p class="text-base leading-relaxed text-gray-700">
                    The platform supports cashless transactions, digital
                    records, and secure data handling to protect users and
                    ensure compliance with Philippine regulations.
                </p>
            </div>

            <!-- Core Services -->
            <CoreServices />
        </div>
    </section>
</template>
