<template>
  <nav
    ref="navRef"
    aria-label="elisinc menu"
    :class="[
      scrolled ? 'mt-2' : 'mt-20',
      'relative mt-2 flex items-center justify-between rounded-2xl border border-neutral-200 bg-white px-6 py-4 shadow-sm sm:mt-0 dark:border-neutral-800 dark:bg-neutral-900',
    ]"
  >
    <!-- Logo -->
    <a href="#" class="text-2xl font-bold text-neutral-900 dark:text-white">
      <img
        src="/assets/images/header/nav-logo.png"
        alt="brand logo"
        class="h-8 w-auto lg:h-10"
      />
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden items-center gap-6 lg:flex">
      <li v-for="(link, index) in links" :key="index">
        <a
          :href="link.href"
          @click="setActive(index)"
          :aria-current="link.current ? 'page' : undefined"
          :class="
            link.current
              ? 'font-semibold text-bright-green underline underline-offset-4 dark:text-white'
              : 'font-medium text-neutral-900 underline-offset-4 hover:text-bright-green hover:underline dark:text-neutral-300 dark:hover:text-white'
          "
        >
          {{ link.label }}
        </a>
      </li>

      <li>
        <Link
          :href="login()"
          class="rounded-md bg-bright-green px-5 py-2 text-sm font-semibold text-white transition hover:bg-dark-green dark:bg-white dark:text-black"
        >
          Log In
        </Link>
      </li>
    </ul>

    <!-- Mobile Toggle -->
    <button
      @click.stop="toggle"
      :aria-expanded="mobileMenuIsOpen"
      type="button"
      aria-label="mobile menu"
      class="flex text-neutral-600 lg:hidden dark:text-neutral-300"
    >
      <!-- Hamburger -->
      <svg
        v-if="!mobileMenuIsOpen"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        class="size-6"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
        />
      </svg>

      <!-- Close -->
      <svg
        v-else
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        class="size-6"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18 18 6M6 6l12 12"
        />
      </svg>
    </button>

    <!-- Mobile Menu -->
    <Transition
      enter-active-class="transition ease-out duration-300"
      enter-from-class="-translate-y-full opacity-0"
      enter-to-class="translate-y-0 opacity-100"
      leave-active-class="transition ease-in duration-200"
      leave-from-class="translate-y-0 opacity-100"
      leave-to-class="-translate-y-full opacity-0"
    >
      <ul
        v-if="mobileMenuIsOpen"
        class="fixed inset-x-4 top-4 z-50 flex max-h-svh flex-col rounded-2xl border border-neutral-200 bg-white px-6 pt-20 pb-6 shadow-lg sm:hidden dark:border-neutral-800 dark:bg-neutral-900"
      >
        <li v-for="(link, index) in links" :key="index" class="py-4">
          <a
            :href="link.href"
            @click="
              setActive(index);
              close();
            "
            :class="
              link.current
                ? 'text-lg font-bold text-dark-green dark:text-white'
                : 'text-lg text-neutral-900 dark:text-neutral-300'
            "
          >
            {{ link.label }}
          </a>
        </li>

        <li class="mt-4">
          <Link
            :href="login()"
            class="block rounded-full bg-bright-green px-4 py-2 text-center font-semibold text-white dark:bg-white dark:text-black"
          >
            Log In
          </Link>
        </li>
      </ul>
    </Transition>
  </nav>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { onBeforeUnmount, onMounted, ref } from 'vue';

import { login } from '@/routes';

interface NavLink {
  label: string;
  href: string;
  current: boolean;
}

const mobileMenuIsOpen = ref(false);
const navRef = ref<HTMLElement | null>(null);

const links = ref<NavLink[]>([
  { label: 'Home', href: '#home', current: true },
  { label: 'About Us', href: '#about', current: false },
  { label: 'How It Works', href: '#how-it-works', current: false },
  { label: 'Services', href: '#services', current: false },
  { label: 'Drivers', href: '#driver', current: false },
  { label: 'Technicians', href: '#technician', current: false },
  { label: 'Passengers', href: '#passenger', current: false },
  { label: 'Testimonials', href: '#testimonials', current: false },
  { label: 'Contact', href: '#contact', current: false },
]);

const toggle = () => {
  mobileMenuIsOpen.value = !mobileMenuIsOpen.value;
};

const close = () => {
  mobileMenuIsOpen.value = false;
};

const setActive = (index: number) => {
  links.value.forEach((link, i) => {
    link.current = i === index;
  });
};

const handleClickOutside = (event: MouseEvent) => {
  if (
    mobileMenuIsOpen.value &&
    navRef.value &&
    !navRef.value.contains(event.target as Node)
  ) {
    close();
  }
};

const handleScrollSpy = () => {
  const scrollPosition = window.scrollY + 120;

  links.value.forEach((link) => {
    const section = document.querySelector(link.href) as HTMLElement | null;

    if (!section) return;

    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;

    if (
      scrollPosition >= sectionTop &&
      scrollPosition < sectionTop + sectionHeight
    ) {
      links.value.forEach((l) => (l.current = false));
      link.current = true;
    }
  });
};

onMounted(() => {
  document.addEventListener('mousedown', handleClickOutside);
  window.addEventListener('scroll', handleScrollSpy, { passive: true });
});

onBeforeUnmount(() => {
  document.removeEventListener('mousedown', handleClickOutside);
  window.removeEventListener('scroll', handleScrollSpy);
});

const scrolled = ref(false);

const onScroll = () => {
  scrolled.value = window.scrollY > 50;
};

onMounted(() => window.addEventListener('scroll', onScroll));
onBeforeUnmount(() => window.removeEventListener('scroll', onScroll));
</script>
