<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { onBeforeUnmount, onMounted, ref } from 'vue';

import AboutUs from '@/components/landing/about-us/AboutUs.vue';
import AboutUsCarousel from '@/components/landing/about-us/AboutUsCarousel.vue';
import VisionMission from '@/components/landing/about-us/VisionMission.vue';
import Contact from '@/components/landing/contact/Contact.vue';
import Driver from '@/components/landing/driver/Driver.vue';
import Footer from '@/components/landing/footer/Footer.vue';
import Header from '@/components/landing/header/Header.vue';
import Navbar from '@/components/landing/header/Navbar.vue';
import Hero from '@/components/landing/hero/Hero.vue';
import HowItWorks from '@/components/landing/how-it-works/HowItWorks.vue';
import Passenger from '@/components/landing/passenger/Passenger.vue';
import Services from '@/components/landing/services/Services.vue';
import Technician from '@/components/landing/technician/Technician.vue';
import Testimonials from '@/components/landing/testimonials/Testimonials.vue';
import TestimonialsCarousel from '@/components/landing/testimonials/TestimonialsCarousel.vue';
import { useAppearance } from '@/composables/useAppearance';

const { updateAppearance } = useAppearance();

interface UserTypes {
  name: string;
  encrypted_id: string;
}

interface Props {
  userTypes: UserTypes[];
}

const { userTypes } = defineProps<Props>();

const scrolled = ref(false);

const onScroll = () => {
  scrolled.value = window.scrollY > 50;
};

onMounted(() => window.addEventListener('scroll', onScroll));
onMounted(() => {
  updateAppearance('light');
});

onBeforeUnmount(() => window.removeEventListener('scroll', onScroll));
</script>

<template>
  <Head title="Welcome" />

  <div class="font-noto relative">
    <Header />

    <div
      :class="[
        scrolled ? 'fixed top-2' : 'absolute bottom-0 translate-y-1/2',
        'right-0 left-0 z-50 px-4 transition-all duration-300 lg:px-6',
      ]"
    >
      <div class="mx-auto max-w-7xl">
        <Navbar />
      </div>
    </div>
  </div>

  <main class="relative z-0">
    <Hero />
    <section id="about">
      <AboutUsCarousel />
      <AboutUs />
      <VisionMission />
    </section>

    <section id="how-it-works">
      <HowItWorks />
    </section>

    <section id="services">
      <Services />
    </section>

    <section id="driver">
      <Driver :userTypes="userTypes" />
    </section>

    <section id="technician">
      <Technician :userTypes="userTypes" />
    </section>

    <section id="passenger">
      <Passenger :userTypes="userTypes" />
    </section>

    <section id="testimonials">
      <Testimonials />
      <TestimonialsCarousel />
    </section>

    <section id="contact">
      <Contact />
    </section>
  </main>

  <Footer />
</template>
