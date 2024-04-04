<script setup>
import { defineProps } from 'vue';
import Carousel from '@/Components/Carousel.vue';

const props = defineProps({
    webProjects: Array,
    mobileProjects: Array,
    softwareProjects: Array,
    hobbies: Array,
});
</script>

<template>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold underline">
            Bienvenue, Recruteur !
        </h1>
        <Carousel title="Projet web" :projects="webProjects" />
        <Carousel title="Projet mobile" :projects="mobileProjects" />
        <Carousel title="Projet logiciel" :projects="softwareProjects" />
        <Carousel title="Hobbies" :projects="hobbies" />
    </div>
</template>

<style scoped>

</style>
