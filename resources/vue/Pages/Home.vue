<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

defineProps({
    technology: Array,
    category: Array,
    client: Array,
});

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
            {{ cat.name }} , {{ cat.context }}
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
</template>
