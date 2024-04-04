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
    <div class="text-white">
        <Carousel title="Projet web" :projects="webProjects" />
        <Carousel title="Projet mobile" :projects="mobileProjects" />
        <Carousel title="Projet logiciel" :projects="softwareProjects" />
        <Carousel title="Hobbies" :projects="hobbies" />
    </div>
</template>

<style scoped>

</style>
