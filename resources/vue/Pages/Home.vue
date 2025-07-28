<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

defineProps({
    technology: Array,
    category: Array,
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
            {{ cat.name }}
        </li>
    </ul>
</template>
