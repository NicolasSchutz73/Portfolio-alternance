<script setup>
import { ref } from 'vue';

// Définition des props
const props = defineProps({
    title: String,
    description: String,
    image_url: String,
    video_url: String,
    stack: String,
    value: String,
    age: String,
    link: String,
});

// État local pour gérer le survol
const hover = ref(false);
</script>

<template>
    <div>
        <h3>{{ title }}</h3>
        <p>{{ description }}</p>
        <p>{{image_url}}</p>
        <p>{{video_url}}</p>
        <p>{{stack}}</p>
        <p>{{value}}</p>
        <p>{{age}}</p>
        <p>{{link}}</p>
    </div>
</template>

<style scoped>

</style>
