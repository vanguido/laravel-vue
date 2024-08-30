<template>
    <FrontendLayout>
        <Head title="About Us" />
        <h1>This is {{ title }} Page</h1>
    </FrontendLayout>
</template>

<script setup>
defineProps({ title: String });
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
