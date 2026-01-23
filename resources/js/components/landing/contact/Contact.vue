<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

const form = reactive({
    first_name: '',
    last_name: '',
    email: '',
    contact: '',
    subject: '',
    message: '',
});

const submit = () => {
    router.post('/contact', form, {
        preserveScroll: true,
        onSuccess: () => {
            Object.keys(form).forEach(
                (key) => (form[key as keyof typeof form] = ''),
            );
        },
    });
};
</script>

<template>
    <section class="mx-auto max-w-7xl px-6 py-20">
        <!-- Section Header -->
        <div class="mb-8 flex w-full items-center gap-4">
            <div class="grow border-t-2 border-bright-green"></div>
            <span
                class="shrink-0 text-xl font-bold tracking-widest text-bright-green uppercase"
            >
                Contact Us
            </span>
            <div class="grow border-t-2 border-bright-green"></div>
        </div>

        <div class="mb-12 text-center">
            <h2 class="mb-4 text-2xl font-bold text-bright-green">
                Get in Touch
            </h2>
            <p class="mx-auto max-w-6xl text-sm text-black md:text-base">
                ELIS Inc. welcomes inquiries, feedback, and partnership
                opportunities.
                <br />
                Our support team is available to assist users with registration
                concerns and general questions.
            </p>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-2">
            <!-- Contact Form -->
            <form @submit.prevent="submit" class="space-y-4">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label
                            class="mb-1 block text-sm font-bold text-bright-green"
                        >
                            First Name
                        </label>
                        <input
                            v-model="form.first_name"
                            type="text"
                            placeholder="First name"
                            class="w-full rounded-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                        />
                    </div>

                    <div>
                        <label
                            class="mb-1 block text-sm font-bold text-bright-green"
                        >
                            Last Name
                        </label>
                        <input
                            v-model="form.last_name"
                            type="text"
                            placeholder="Last name"
                            class="w-full rounded-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                        />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label
                            class="mb-1 block text-sm font-bold text-bright-green"
                        >
                            Email
                        </label>
                        <input
                            v-model="form.email"
                            type="email"
                            placeholder="Email"
                            class="w-full rounded-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                        />
                    </div>

                    <div>
                        <label
                            class="mb-1 block text-sm font-bold text-bright-green"
                        >
                            Contact Details
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center rounded-l-xl border border-r-0 border-emerald-100 bg-gray-50 px-3 text-sm font-bold text-bright-green"
                            >
                                +63
                            </span>
                            <input
                                v-model="form.contact"
                                type="text"
                                placeholder="Contact details"
                                class="w-full rounded-r-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <label
                        class="mb-1 block text-sm font-bold text-bright-green"
                    >
                        Subject
                    </label>
                    <input
                        v-model="form.subject"
                        type="text"
                        placeholder="Subject"
                        class="w-full rounded-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                    />
                </div>

                <div>
                    <label
                        class="mb-1 block text-sm font-bold text-bright-green"
                    >
                        Message
                    </label>
                    <textarea
                        v-model="form.message"
                        rows="4"
                        placeholder="Message ..."
                        class="w-full resize-none rounded-xl border border-emerald-100 px-4 py-3 focus:ring-2 focus:ring-bright-green/20 focus:outline-none"
                    />
                </div>

                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="flex items-center gap-2 rounded-lg bg-bright-green px-8 py-3 font-bold text-white transition-all hover:bg-emerald-700"
                    >
                        Send <span>→</span>
                    </button>
                </div>
            </form>

            <!-- Contact Info -->
            <div
                class="rounded-xl bg-linear-to-br from-[#00a859] to-[#007a41] p-8 text-white shadow-xl md:p-12"
            >
                <h3 class="mb-8 text-2xl font-bold">Find us:</h3>

                <div class="space-y-6">
                    <div
                        class="flex items-center gap-5 rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm"
                    >
                        <img
                            src="/assets/images/contact-us/mobile-number.png"
                            class="h-10 w-10 object-contain"
                            alt="Mobile"
                        />
                        <div>
                            <p class="text-lg font-bold">Mobile Number:</p>
                            <p class="opacity-90">+63 912 345 6789</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-5 rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm"
                    >
                        <img
                            src="/assets/images/contact-us/email-address.png"
                            class="h-10 w-10 object-contain"
                            alt="Email"
                        />
                        <div>
                            <p class="text-lg font-bold">Email Address:</p>
                            <p class="opacity-90">info.elissample@gmail.com</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-5 rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm"
                    >
                        <img
                            src="/assets/images/contact-us/address.png"
                            class="h-10 w-10 object-contain"
                            alt="Address"
                        />
                        <div>
                            <p class="text-lg font-bold">Address:</p>
                            <p class="text-sm opacity-90">
                                Unit 202, GreenTech Building, Quezon City,
                                Philippines
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div
            class="mt-20 flex flex-col items-center justify-center gap-8 md:flex-row"
        >
            <p
                class="text-center text-lg font-bold text-bright-green md:text-xl"
            >
                Follow us on social media for the latest updates!
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="transition-transform hover:scale-110">
                    <img
                        src="/assets/images/contact-us/fb.png"
                        class="h-12 w-12"
                    />
                </a>
                <a href="#" class="transition-transform hover:scale-110">
                    <img
                        src="/assets/images/contact-us/yt.png"
                        class="h-12 w-12"
                    />
                </a>
                <a href="#" class="transition-transform hover:scale-110">
                    <img
                        src="/assets/images/contact-us/insta.png"
                        class="h-12 w-12"
                    />
                </a>
                <a href="#" class="transition-transform hover:scale-110">
                    <img
                        src="/assets/images/contact-us/x.png"
                        class="h-12 w-12"
                    />
                </a>
                <a href="#" class="transition-transform hover:scale-110">
                    <img
                        src="/assets/images/contact-us/tiktok.png"
                        class="h-12 w-12"
                    />
                </a>
            </div>
        </div>
    </section>
</template>
