<script setup>
import { defineProps } from 'vue';
import ProjectItem from '@/Components/ProjectItem.vue';

const props = defineProps({
    title: String,
    projects: Array,
});
</script>

<template>
    <div class="my-8">
        <h2 class="text-2xl font-bold mb-4">{{ title }}</h2>
        <div class="flex overflow-x-auto gap-4">
            <ProjectItem
                v-for="project in projects"
                :key="project.id"
                :project="project"
            />
        </div>
    </div>
</template>

<style scoped>
.carousel-item {
    min-width: 300px; /* Les éléments du carousel ont une largeur minimale */
}
</style>
