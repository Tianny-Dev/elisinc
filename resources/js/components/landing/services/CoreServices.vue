<script setup lang="ts">
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

interface CoreService {
    image: string;
    text: string;
}

import img1 from '/public/assets/images/core-services/core-img-1.jpg';
import img2 from '/public/assets/images/core-services/core-img-2.jpg';
import img3 from '/public/assets/images/core-services/core-img-3.jpg';
import img4 from '/public/assets/images/core-services/core-img-4.jpg';
import img5 from '/public/assets/images/core-services/core-img-5.jpg';
import img6 from '/public/assets/images/core-services/core-img-6.jpg';

import arrowLeft from '/public/assets/images/core-services/white-arrow-l.png';
import arrowRight from '/public/assets/images/core-services/white-arrow-r.png';

const cards = ref<CoreService[]>([
    {
        image: img1,
        text: 'Real-time trip recording that automatically logs every completed ride for accuracy and accountability',
    },
    {
        image: img2,
        text: 'Digital income and transaction tracking that allows users to view earnings and payment history clearly',
    },
    {
        image: img3,
        text: 'Electric vehicle status monitoring to help ensure safe, efficient, and uninterrupted operations',
    },
    {
        image: img4,
        text: 'Integrated maintenance coordination that enables timely servicing and repair documentation',
    },
    {
        image: img5,
        text: 'Passenger ride booking with live location tracking and fare visibility',
    },
    {
        image: img6,
        text: 'Secure cashless payment support with digital receipts and trip summaries',
    },
]);

const currentSlide = ref(0);
const itemsPerView = ref(1);
let autoSlideTimer: number | undefined;

/**
 * Responsive logic
 */
const updateItemsPerView = () => {
    const width = window.innerWidth;

    if (width >= 1024) itemsPerView.value = 3;
    else if (width >= 768) itemsPerView.value = 2;
    else itemsPerView.value = 1;

    if (currentSlide.value > maxSlide.value) {
        currentSlide.value = maxSlide.value;
    }
};

const maxSlide = computed(() => {
    return Math.max(cards.value.length - itemsPerView.value, 0);
});

const nextSlide = () => {
    currentSlide.value =
        currentSlide.value >= maxSlide.value ? 0 : currentSlide.value + 1;
};

const prevSlide = () => {
    currentSlide.value =
        currentSlide.value <= 0 ? maxSlide.value : currentSlide.value - 1;
};

onMounted(() => {
    updateItemsPerView();
    window.addEventListener('resize', updateItemsPerView);

    autoSlideTimer = window.setInterval(() => {
        nextSlide();
    }, 4000);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateItemsPerView);
    if (autoSlideTimer) clearInterval(autoSlideTimer);
});
</script>

<template>
    <div class="relative mx-auto w-full max-w-7xl px-4 py-12">
        <h3 class="mb-4 text-center text-xl font-bold text-bright-green">
            Core Services Provided
        </h3>

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
                    class="shrink-0 px-3 py-6"
                    :class="{
                        'w-full': itemsPerView === 1,
                        'w-1/2': itemsPerView === 2,
                        'w-1/3': itemsPerView === 3,
                    }"
                >
                    <div
                        class="flex h-full flex-col overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-md shadow-emerald-100 transition-shadow duration-300 hover:shadow-lg"
                    >
                        <div class="h-48 w-full overflow-hidden p-5">
                            <img
                                :src="card.image"
                                alt=""
                                class="h-full w-full object-cover"
                            />
                        </div>

                        <div class="flex grow flex-col p-6 text-center">
                            <p class="text-sm leading-relaxed text-gray-700">
                                {{ card.text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button
            @click="prevSlide"
            class="absolute top-1/2 -left-2 z-10 -translate-y-1/2 rounded-full border transition-transform duration-300 hover:scale-110 md:-left-12"
        >
            <img :src="arrowLeft" alt="Previous" class="h-10 w-10" />
        </button>

        <button
            @click="nextSlide"
            class="absolute top-1/2 -right-2 z-10 -translate-y-1/2 rounded-full border transition-transform duration-300 hover:scale-110 md:-right-12"
        >
            <img :src="arrowRight" alt="Next" class="h-10 w-10" />
        </button>
    </div>
</template>
