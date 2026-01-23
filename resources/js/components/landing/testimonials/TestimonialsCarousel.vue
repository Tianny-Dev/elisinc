<script setup lang="ts">
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

interface Testimonial {
    name: string;
    role: string;
    image: string;
    quote: string;
}

const cards = ref<Testimonial[]>([
    {
        name: 'Ramon S. Cruz',
        role: 'E-Tricycle Driver',
        image: '/assets/images/testimonials/testimonials-pic-1.png',
        quote: 'Malaking tulong ang ELIS Inc. sa araw-araw kong trabaho. Malinaw ang tala ng biyahe at kita, at mas kampante akong magmaneho dahil electric at maayos ang sistema.',
    },
    {
        name: 'Liza Mae Torres',
        role: 'Operations Coordinator',
        image: '/assets/images/testimonials/testimonials-pic-2.png',
        quote: 'Daily operations became more organized after using the ELIS Inc. platform. Coordination is faster, and reporting-related issues have been significantly reduced.',
    },
    {
        name: 'Jonathan P. Reyes',
        role: 'Electric Vehicle Technician',
        image: '/assets/images/testimonials/testimonials-pic-3.png',
        quote: 'Tracking maintenance requests and service updates is now much easier. Schedules are clear, and vehicle conditions are consistently well maintained.',
    },
    {
        name: 'Maria Angelica Dizon',
        role: 'Passenger',
        image: '/assets/images/testimonials/testimonials-pic-4.png',
        quote: 'Malinis, tahimik, at madaling i-book ang mga electric ride. Nagustuhan ko ang real-time tracking at ang digital na resibo pagkatapos ng bawat biyahe.',
    },
    {
        name: 'Edwin L. Navarro',
        role: 'Transport Cooperative Officer',
        image: '/assets/images/testimonials/testimonials-pic-5.png',
        quote: 'ELIS Inc. represents a major step toward modern and sustainable transportation. The benefits are evident not only in daily operations but also within the community.',
    },
]);

const currentSlide = ref(0);
const itemsPerView = ref(1);
let autoSlide: number | undefined;

const updateItemsPerView = () => {
    if (window.innerWidth >= 1024) itemsPerView.value = 3;
    else if (window.innerWidth >= 768) itemsPerView.value = 2;
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
    autoSlide = window.setInterval(nextSlide, 4000);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateItemsPerView);
    if (autoSlide) clearInterval(autoSlide);
});
</script>

<template>
    <div class="relative mx-auto w-full max-w-7xl px-4 py-12">
        <div class="overflow-hidden">
            <div
                class="flex transition-transform duration-500 ease-in-out"
                :style="{
                    transform: `translateX(-${currentSlide * (100 / itemsPerView)}%)`,
                }"
            >
                <div
                    v-for="(card, index) in cards"
                    :key="index"
                    class="shrink-0 px-4 py-10"
                    :class="{
                        'w-full': itemsPerView === 1,
                        'w-1/2': itemsPerView === 2,
                        'w-1/3': itemsPerView === 3,
                    }"
                >
                    <div
                        class="relative flex h-full flex-col rounded-4xl border border-emerald-50/50 bg-white p-8 shadow-md shadow-emerald-100 transition-shadow hover:shadow-lg"
                    >
                        <!-- Quote Icon -->
                        <div class="absolute -top-5 -right-1 z-10">
                            <svg
                                width="45"
                                height="35"
                                viewBox="0 0 60 45"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M22.5 0L15 45H0L7.5 0H22.5ZM52.5 0L45 45H30L37.5 0H52.5Z"
                                    fill="#00a859"
                                />
                            </svg>
                        </div>

                        <!-- Header -->
                        <div class="mb-6 flex items-center gap-4 text-left">
                            <div
                                class="h-16 w-16 shrink-0 overflow-hidden rounded-full border-2 border-emerald-100"
                            >
                                <img
                                    :src="card.image"
                                    :alt="card.name"
                                    class="h-full w-full object-cover"
                                    loading="lazy"
                                />
                            </div>

                            <div>
                                <h4
                                    class="text-lg leading-tight font-bold text-bright-green"
                                >
                                    {{ card.name }}
                                </h4>
                                <p
                                    class="text-xs font-medium tracking-wider text-gray-400 uppercase"
                                >
                                    {{ card.role }}
                                </p>
                            </div>
                        </div>

                        <!-- Quote -->
                        <div class="flex grow items-center text-center">
                            <p
                                class="text-base leading-relaxed text-gray-700 italic"
                            >
                                “{{ card.quote }}”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <button
            @click="prevSlide"
            class="absolute top-1/2 -left-2 z-10 -translate-y-1/2 rounded-full border transition-transform hover:scale-110 md:-left-12"
        >
            <img
                src="/assets/images/core-services/white-arrow-l.png"
                alt="Previous"
                class="h-10 w-10"
            />
        </button>

        <button
            @click="nextSlide"
            class="absolute top-1/2 -right-2 z-10 -translate-y-1/2 rounded-full border transition-transform hover:scale-110 md:-right-12"
        >
            <img
                src="/assets/images/core-services/white-arrow-r.png"
                alt="Next"
                class="h-10 w-10"
            />
        </button>
    </div>
</template>
