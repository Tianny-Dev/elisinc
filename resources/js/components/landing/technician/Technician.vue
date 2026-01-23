<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Props {
  userTypes: { name: string; encrypted_id: string }[];
}

const { userTypes } = defineProps<Props>();

const technician = userTypes.find((t) => t.name === 'technician');

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
            class="text-bright-green text-sm font-bold tracking-widest uppercase md:text-xl"
          >
            Technician
          </span>
          <div class="border-bright-green grow border-t-2"></div>
        </div>

        <!-- Heading -->
        <h2
          class="text-bright-green mb-6 text-3xl leading-tight font-bold md:text-5xl"
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
            Technicians play a critical role in maintaining electric vehicles.
            ELIS Inc. provides technicians with digital tools to receive service
            requests, update repair progress, log parts usage, and communicate
            efficiently with operations coordinators.
          </p>
          <p>
            This structured approach improves vehicle reliability, reduces
            downtime, and ensures passenger safety.
          </p>
        </div>

        <!-- CTA -->
        <Link
          v-if="technician"
          :href="`/register/${technician.encrypted_id}`"
          class="bg-bright-green hover:bg-dark-green rounded-lg px-8 py-3 font-medium text-white transition-colors duration-300"
        >
          Join as a Technician
        </Link>
      </div>
    </div>
  </section>
</template>
