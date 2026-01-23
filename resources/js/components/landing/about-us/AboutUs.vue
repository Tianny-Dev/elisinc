<script setup lang="ts">
import aboutUsBg from '/public/assets/images/about-us/about-us-bg.jpg';
import aboutUsLabel from '/public/assets/images/about-us/about-us.png';
</script>

<template>
    <section class="relative py-12">
        <div class="relative mx-auto max-w-7xl px-6">
            <!-- Floating "About Us" Label -->
            <div class="absolute -top-4.5 left-1/2 z-20 -translate-x-1/2">
                <div
                    class="flex h-16 items-center justify-center px-10"
                    :style="{
                        backgroundImage: `url(${aboutUsLabel})`,
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        backgroundPosition: 'center',
                    }"
                >
                    <span
                        class="text-md font-bold tracking-wide text-green-700 uppercase"
                    >
                        About Us
                    </span>
                </div>
            </div>

            <!-- Main Content -->
            <div
                class="relative overflow-hidden rounded-3xl bg-green-700 px-8 py-14 text-center text-white md:px-16"
                :style="{
                    backgroundImage: `url(${aboutUsBg})`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }"
            >
                <div class="relative z-10">
                    <h2 class="mb-4 text-xl font-bold">Who We Are</h2>

                    <p
                        class="mx-auto max-w-6xl text-sm leading-relaxed md:text-base"
                    >
                        ELIS Inc. is a Philippine-based electric mobility
                        company dedicated to improving public transportation
                        through technology and sustainability. We operate an
                        integrated digital platform that supports electric
                        tricycles and electric taxis, ensuring smooth
                        coordination between drivers, technicians, and
                        passengers.
                    </p>

                    <p
                        class="mx-auto mt-4 max-w-6xl text-sm leading-relaxed md:text-base"
                    >
                        Our goal is to make electric transport practical,
                        reliable, and accessible for everyday use across cities
                        and local communities.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
