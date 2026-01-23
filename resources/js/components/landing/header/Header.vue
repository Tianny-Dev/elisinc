<script setup lang="ts">
import ApplicationIconEmail from '@/components/icons/ApplicationIconEmail.vue';
import ApplicationIconPhone from '@/components/icons/ApplicationIconPhone.vue';
</script>

<template>
    <div class="mx-auto w-full max-w-300 lg:pt-4 lg:pb-13">
        <div class="flex items-center justify-between">
            <div class="hidden lg:block">
                <p class="text-bright-green">Greening the Future of Mobility</p>
            </div>

            <div class="hidden lg:block">
                <div class="flex items-center gap-10">
                    <div class="flex items-center gap-4">
                        <div
                            class="grid h-11 w-11 place-items-center rounded-full bg-bright-green/10"
                        >
                            <ApplicationIconPhone
                                class="h-5 text-bright-green"
                            />
                        </div>
                        <p class="text-sm text-bright-green">
                            Phone Number
                            <span class="block font-medium text-black">
                                0917 591 4370
                            </span>
                        </p>
                    </div>

                    <div class="flex items-center gap-4">
                        <div
                            class="grid h-11 w-11 place-items-center rounded-full bg-bright-green/10"
                        >
                            <ApplicationIconEmail
                                class="h-5 text-bright-green"
                            />
                        </div>
                        <p class="text-sm text-bright-green">
                            Email Address
                            <span class="block font-medium text-black">
                                info@elisincsample.com
                            </span>
                        </p>
                    </div>

                    <a
                        href="#"
                        class="rounded-md border border-bright-green px-6 py-2.5 text-bright-green transition hover:bg-bright-green hover:text-white"
                    >
                        Download App
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
