<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

// Props yang datang dari server via Inertia
defineProps({
    technology: Array,
    category: Array,
    client: Array,
});

// Form dengan useForm dari Inertia
const form = useForm({
    name: "",
    email: "",
    need: "",
    massage: "",
});

// Error dari form.errors (Inertia otomatis isi jika ada validasi error)
const errors = computed(() => form.errors || {});

// Fungsi submit form
function submit() {
    form.post(route("contact.store"));
}

// Contoh prop lain dari server
const appName = computed(() => page.props.appName);
</script>

<template>
    <Head title="Welcome" />

    <h1 class="text-2xl font-bold mb-4">Welcome Wahyu</h1>
    <p>test app name {{ appName }}</p>

    <h1 class="text-2xl font-bold mb-4">Teknologiaaaaaa.....</h1>
    <ul class="list-disc ml-5 space-y-1">
        <li v-for="tech in technology" :key="tech.id">
            {{ tech.name }}
        </li>
    </ul>

    <h1 class="text-2xl font-bold mb-4">Kategoti orang ganteng..</h1>
    <ul class="list-disc ml-5 space-y-1">
        <li v-for="cat in category" :key="cat.id">
            {{ cat.name }}, {{ cat.context }}
        </li>
    </ul>

    <h1 class="text-2xl font-bold mb-6">Ini Klien Kitaa..</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
            v-for="cli in client"
            :key="cli.id"
            class="bg-white rounded-2xl shadow-md p-5 flex flex-col items-center text-center hover:shadow-lg transition"
        >
            <img
                :src="cli.logo_url"
                alt="Logo"
                class="w-20 h-20 object-contain mb-4"
            />
            <h2 class="text-lg font-semibold">{{ cli.name }}</h2>
            <p class="text-gray-600 text-sm mt-2">{{ cli.desc }}</p>
        </div>
    </div>

    <h1 class="text-2xl font-bold mb-6 mt-10">Hubungi Ane....</h1>
    <form @submit.prevent="submit" class="max-w-md mx-auto space-y-4 mt-8">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">
                Nama Ente:
            </label>
            <input
                id="name"
                v-model="form.name"
                type="text"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            />
            <div v-if="errors.name" class="text-red-500 text-sm mt-1">
                {{ errors.name }}
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
                Email Ente:
            </label>
            <input
                id="email"
                v-model="form.email"
                type="email"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            />
            <div v-if="errors.email" class="text-red-500 text-sm mt-1">
                {{ errors.email }}
            </div>
        </div>

        <div>
            <label for="need" class="block text-sm font-medium text-gray-700">
                Ente Mau Apa:
            </label>
            <input
                id="need"
                v-model="form.need"
                type="text"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            />
            <div v-if="errors.need" class="text-red-500 text-sm mt-1">
                {{ errors.need }}
            </div>
        </div>

        <div>
            <label
                for="massage"
                class="block text-sm font-medium text-gray-700"
            >
                Kasih Ane Pesen:
            </label>
            <textarea
                id="massage"
                v-model="form.massage"
                rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            ></textarea>
            <div v-if="errors.massage" class="text-red-500 text-sm mt-1">
                {{ errors.massage }}
            </div>
        </div>

        <button
            type="submit"
            :disabled="form.processing"
            class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 disabled:opacity-50"
        >
            Submit
        </button>
    </form>
</template>
