<script setup lang="ts">
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

import arrowLeft from '/public/assets/images/about-us/green-arrow-l.png';
import arrowRight from '/public/assets/images/about-us/green-arrow-r.png';

type Card = {
    title: string;
    textFull: string;
    button: string;
};

const cards = ref<Card[]>([
    {
        title: 'Why ELIS Inc.',
        textFull: `ELIS Inc. was created to modernize local transport using fully electric vehicles. Our platform
    replaces manual processes with digital visibility, allowing users to focus on safe travel,
    fair earnings, and dependable service. By operating exclusively with electric vehicles,
    ELIS Inc. helps reduce pollution, noise, and fuel dependency while improving daily commuting experiences.`,
        button: 'Learn more',
    },
    {
        title: 'How ELIS Works (Overview)',
        textFull: `Using ELIS Inc. is simple and accessible to everyone. Users begin by selecting their role on the
    platform, completing registration, and submitting required information for verification.
    Once approved, they gain access to personalized tools that support daily operations such as
    ride booking, trip tracking, income monitoring, maintenance coordination, and support services.
    All activities are recorded digitally and updated in real time.`,
        button: 'Learn more',
    },
    {
        title: 'Solutions for Every User',
        textFull: `ELIS Inc. supports different user groups with role-based access. Drivers manage trips and
    earnings digitally. Technicians receive service requests and log maintenance activities.
    Passengers book electric rides and track trips live. Each experience is designed to be simple,
    transparent, and mobile-friendly.`,
        button: 'Learn more',
    },
    {
        title: 'App Availability',
        textFull: `The ELIS mobile application allows users to manage trips, earnings, service requests, and ride
    bookings anytime and anywhere. The app will be available on Google Play and the App Store,
    bringing electric mobility tools directly to your phone.`,
        button: 'Learn more',
    },
]);

const currentSlide = ref(0);
const itemsPerView = ref(1);
const modalIsOpen = ref(false);
const selectedCardTitle = ref('');
const selectedCardText = ref('');

let autoSlide: number | undefined;

const updateItemsPerView = () => {
    itemsPerView.value = window.innerWidth >= 768 ? 2 : 1;
};

const maxSlide = computed(() => cards.value.length - itemsPerView.value);

const nextSlide = () => {
    currentSlide.value =
        currentSlide.value >= maxSlide.value ? 0 : currentSlide.value + 1;
};

const prevSlide = () => {
    currentSlide.value =
        currentSlide.value <= 0 ? maxSlide.value : currentSlide.value - 1;
};

const truncate = (text: string, length = 200) =>
    text.length > length ? text.substring(0, length) + '...' : text;

const openModal = (title: string, text: string) => {
    selectedCardTitle.value = title;
    selectedCardText.value = text;
    modalIsOpen.value = true;
};

onMounted(() => {
    updateItemsPerView();
    window.addEventListener('resize', updateItemsPerView);
    autoSlide = window.setInterval(nextSlide, 4000);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateItemsPerView);
    if (autoSlide) clearInterval(autoSlide);
});
</script>

<template>
    <div class="relative mx-auto w-full max-w-7xl px-4 py-12">
        <!-- Slider -->
        <div class="overflow-hidden rounded-2xl">
            <div
                class="flex transition-transform duration-500 ease-in-out"
                :style="{
                    transform: `translateX(-${currentSlide * (100 / itemsPerView)}%)`,
                }"
            >
                <div
                    v-for="(card, index) in cards"
                    :key="index"
                    class="shrink-0 px-4 py-6"
                    :class="itemsPerView === 2 ? 'w-1/2' : 'w-full'"
                >
                    <div
                        class="flex h-full flex-col rounded-2xl bg-white p-6 shadow-md shadow-bright-green transition-shadow duration-300 hover:shadow-lg"
                    >
                        <div class="grow">
                            <h3
                                class="mb-4 text-xl font-bold text-bright-green"
                            >
                                {{ card.title }}
                            </h3>
                            <p class="text-sm leading-relaxed text-gray-700">
                                {{ truncate(card.textFull) }}
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button
                                class="rounded-xl bg-bright-green px-6 py-2.5 font-semibold text-white transition-colors hover:bg-dark-green"
                                @click="openModal(card.title, card.textFull)"
                            >
                                {{ card.button }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Arrows -->
        <button
            @click="prevSlide"
            class="absolute top-1/2 left-2 z-10 -translate-y-1/2 transition-transform hover:scale-110 sm:-left-8 md:-left-10 lg:-left-12"
        >
            <img
                :src="arrowLeft"
                class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10"
            />
        </button>

        <button
            @click="nextSlide"
            class="absolute top-1/2 right-2 z-10 -translate-y-1/2 transition-transform hover:scale-110 sm:-right-8 md:-right-10 lg:-right-12"
        >
            <img
                :src="arrowRight"
                class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10"
            />
        </button>

        <!-- Modal -->
        <transition name="fade">
            <div
                v-if="modalIsOpen"
                class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md"
                @click.self="modalIsOpen = false"
            >
                <div
                    class="w-full max-w-lg overflow-hidden rounded-2xl border border-gray-300 bg-white"
                >
                    <div class="flex items-center justify-between border-b p-4">
                        <h3 class="text-lg font-semibold">
                            {{ selectedCardTitle }}
                        </h3>
                        <button @click="modalIsOpen = false">✕</button>
                    </div>

                    <div class="px-4 py-6">
                        <p>{{ selectedCardText }}</p>
                    </div>

                    <div class="flex justify-end border-t p-4">
                        <button
                            class="rounded bg-gray-200 px-4 py-2 hover:bg-gray-300"
                            @click="modalIsOpen = false"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>
