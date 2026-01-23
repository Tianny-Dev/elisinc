<script setup lang="ts">
import logo from '@/assets/loginlogo.png';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';

defineProps<{
  title?: string;
  titleRegistration?: string;
}>();
</script>

<template>
  <div
    class="relative min-h-svh w-full bg-[url(@/assets/auth/loginbg.jpg)] bg-cover bg-center"
  >
    <!-- DESKTOP LEFT TEXT -->
    <div
      class="pointer-events-none absolute inset-y-0 left-0 z-10 hidden items-center px-16 lg:flex"
    >
      <h1
        class="max-w-3xl text-4xl leading-tight font-bold text-white xl:text-5xl"
      >
        Powering Everyday Travel with Clean Electric Mobility
      </h1>
    </div>

    <!-- RIGHT WHITE PANEL (DESKTOP) -->
    <div
      class="absolute inset-y-0 right-0 z-20 hidden w-[35%] items-center bg-white lg:flex"
    >
      <div class="mx-auto flex w-full max-w-md flex-col justify-center px-8">
        <Card class="overflow-hidden rounded-2xl border-0 shadow-xl">
          <CardHeader class="pt-6 text-center">
            <img :src="logo" class="mx-auto h-14 w-auto" />
            <CardTitle class="pt-4 text-2xl text-auth-blue">
              {{ title }}
            </CardTitle>
          </CardHeader>

          <CardTitle
            v-if="titleRegistration"
            class="bg-auth-blue py-2 text-center text-3xl text-white"
          >
            {{ titleRegistration }}
          </CardTitle>

          <CardContent class="px-6 pb-6">
            <slot />
          </CardContent>
        </Card>
      </div>
    </div>

    <!-- MOBILE / TABLET CENTERED CARD -->
    <div
      class="relative z-30 flex min-h-svh items-center justify-center px-4 lg:hidden"
    >
      <Card class="w-full max-w-md rounded-2xl border-0 bg-white shadow-xl">
        <CardHeader class="pt-6 text-center">
          <img :src="logo" class="mx-auto h-14 w-auto" />
          <CardTitle class="pt-4 text-2xl text-auth-blue">
            {{ title }}
          </CardTitle>
        </CardHeader>

        <CardTitle
          v-if="titleRegistration"
          class="bg-auth-blue py-2 text-center text-3xl text-white"
        >
          {{ titleRegistration }}
        </CardTitle>

        <CardContent class="px-6 pb-6">
          <slot />
        </CardContent>
      </Card>
    </div>
  </div>
</template>
