<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Props {
  userTypes: { name: string; encrypted_id: string }[];
}

const { userTypes } = defineProps<Props>();

const passenger = userTypes.find((t) => t.name === 'passenger');

const passengerImage = computed(
  () => '/assets/images/passenger/passenger-img.png',
);
</script>

<template>
  <section class="mx-auto max-w-7xl overflow-hidden px-6 py-2">
    <!-- Divider + Label -->
    <div class="mb-8 flex w-full items-center gap-4">
      <div class="border-bright-green grow border-t-2"></div>

      <span
        class="text-bright-green shrink-0 text-xl font-bold tracking-widest uppercase"
      >
        Passenger
      </span>

      <div class="border-bright-green grow border-t-2"></div>
    </div>

    <!-- Title -->
    <h2
      class="text-bright-green mb-16 text-center text-4xl leading-tight font-bold md:text-6xl"
    >
      Ride Electric. Ride Smart.
    </h2>

    <!-- Content -->
    <div
      class="flex flex-col items-center gap-12 md:flex-row md:items-start lg:gap-20"
    >
      <!-- Text -->
      <div class="order-2 w-full md:order-1 md:w-[60%]">
        <div class="mb-10 space-y-6 text-lg leading-relaxed text-gray-700">
          <p>
            Passengers using ELIS Inc. enjoy clean, quiet, and dependable
            electric rides. The platform allows users to book rides instantly,
            view fare estimates, track drivers in real time, and receive digital
            receipts after each trip.
          </p>

          <p>
            Feedback and rating features help maintain service quality and
            encourage continuous improvement.
          </p>
        </div>

        <!-- CTA -->
        <Link
          v-if="passenger"
          :href="`/register/${passenger.encrypted_id}`"
          class="bg-bright-green hover:bg-dark-green inline-block rounded-xl px-10 py-3 font-bold text-white shadow-md transition-all duration-300 hover:shadow-lg"
        >
          Book a Ride Now
        </Link>
      </div>

      <!-- Image -->
      <div class="order-1 w-full md:order-2 md:w-[40%]">
        <div class="relative">
          <img
            :src="passengerImage"
            alt="Passengers with Electric Car"
            class="h-auto w-full origin-center object-contain md:origin-right md:scale-125"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </section>
</template>
