<script setup lang="ts">
import valuesImg from '/public/assets/images/about-us/values.png';
import visionMissionImg from '/public/assets/images/about-us/vision-mission.png';
</script>

<template>
    <section class="py-8">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <!-- Vision & Mission -->
                <div class="flex items-start gap-6">
                    <div class="shrink-0">
                        <img
                            :src="visionMissionImg"
                            alt="Vision and Mission"
                            class="h-32 w-auto"
                        />
                    </div>

                    <div>
                        <h3
                            class="mb-2 text-2xl font-semibold text-bright-green"
                        >
                            Vision and Mission
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-700">
                            Our vision is to help shape a cleaner and smarter
                            transport future for the Philippines. Our mission is
                            to simplify electric transport operations, empower
                            workers in the mobility sector, and provide
                            commuters with safe, efficient, and environmentally
                            responsible travel options.
                        </p>
                    </div>
                </div>

                <!-- Values -->
                <div class="flex items-start gap-6">
                    <div class="shrink-0">
                        <img
                            :src="valuesImg"
                            alt="Values"
                            class="h-32 w-auto"
                        />
                    </div>

                    <div>
                        <h3
                            class="mb-2 text-2xl font-semibold text-bright-green"
                        >
                            Values
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-700">
                            ELIS Inc. operates with a strong commitment to
                            innovation, transparency, sustainability,
                            empowerment, and service to the Filipino commuter.
                            These values guide how we design our platform,
                            support our users, and grow our operations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
