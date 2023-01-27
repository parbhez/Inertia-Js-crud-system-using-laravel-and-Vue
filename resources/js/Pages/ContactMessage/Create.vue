<template>
    <div>
        <AppHead>
            <title>Contact</title>
            <meta name="description" content="Your page description" />
        </AppHead>

        <AppLayout>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-900">{{ title }}</h1>
                    <Link :href="route('contact.create')" class="inline-flex justify-left rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</Link>
                </div>
            </header>

            <main>
                <div class="max-w-7xl max-auto py-6 sm:px-6 lg:px-8">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3
                                        class="text-lg font-medium leading-6 text-gray-900"
                                    >
                                        Personal Information
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Use a permanent address where you can
                                        receive mail.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <form @submit.prevent="save_data">
                                    <div
                                        class="overflow-hidden shadow sm:rounded-md"
                                    >
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div
                                                    class="col-span-6 sm:col-span-4"
                                                >
                                                    <label
                                                        for="name"
                                                        class="block text-sm font-medium text-gray-700"
                                                        >Name</label
                                                    >

                                                    <input
                                                        type="text"
                                                        name="name"
                                                        v-model="form.name"
                                                        id="name"
                                                        autocomplete="name"
                                                        placeholder="Name"
                                                        :class="{
                                                            'border-red-500':
                                                                form.errors
                                                                    .name,
                                                        }"
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    />
                                                    <div
                                                        class="text-red-500"
                                                        v-if="form.errors.name"
                                                    >
                                                        {{ form.errors.name }}
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-span-6 sm:col-span-4"
                                                >
                                                    <label
                                                        for="email"
                                                        class="block text-sm font-medium text-gray-700"
                                                        >Email</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="email"
                                                        v-model="form.email"
                                                        id="email"
                                                        placeholder="Email"
                                                        autocomplete="email"
                                                        :class="{
                                                            'border-red-500':
                                                                form.errors
                                                                    .email,
                                                        }"
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    />
                                                    <div
                                                        class="text-red-500"
                                                        v-if="form.errors.email"
                                                    >
                                                        {{ form.errors.email }}
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-span-6 sm:col-span-4"
                                                >
                                                    <label
                                                        for="subject"
                                                        class="block text-sm font-medium text-gray-700"
                                                        >Subject</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="subject"
                                                        v-model="form.subject"
                                                        id="subject"
                                                        placeholder="Subject"
                                                        autocomplete="subject"
                                                        :class="{
                                                            'border-red-500':
                                                                form.errors
                                                                    .subject,
                                                        }"
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    />
                                                    <div
                                                        class="text-red-500"
                                                        v-if="
                                                            form.errors.subject
                                                        "
                                                    >
                                                        {{
                                                            form.errors.subject
                                                        }}
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-span-6 sm:col-span-4"
                                                >
                                                    <label
                                                        for="message"
                                                        class="block text-sm font-medium text-gray-700"
                                                        >Message</label
                                                    >
                                                    <div class="mt-1">
                                                        <textarea
                                                            id="message"
                                                            name="message"
                                                            v-model="
                                                                form.message
                                                            "
                                                            rows="3"
                                                            :class="{
                                                                'border-red-500':
                                                                    form.errors
                                                                        .message,
                                                            }"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="Message"
                                                        />
                                                        <div
                                                            class="text-red-500"
                                                            v-if="
                                                                form.errors
                                                                    .message
                                                            "
                                                        >
                                                            {{
                                                                form.errors
                                                                    .message
                                                            }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-gray-50 px-4 py-3 text-left sm:px-6"
                                        >
                                            <button
                                                type="submit"
                                                :disabled="form.processing"
                                                class="inline-flex justify-left rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                            >
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </AppLayout>
    </div>
</template>

<script>
import AppLayout from "../../Layouts/App.vue";
import { reactive } from "vue";
import { useForm } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
export default {
    components: {
        AppLayout,
    },
    props:{
        title:{
            type: String
        }
    },
    setup() {
        const form = useForm({
            name: null,
            email: null,
            subject: null,
            message: null,
        });

        function save_data() {
            // form.post("/contact/store");
            form.post(route('contact.store'));
        }

        return { form, save_data };
    },
};
</script>
