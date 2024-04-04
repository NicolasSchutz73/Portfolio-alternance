<script setup>
import { defineProps } from 'vue';
import ProjectItem from '@/Components/ProjectItem.vue';

const props = defineProps({
    projects: Array,
});
</script>

<template>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold underline">
            Bienvenue, Recruteur !
        </h1>

        <div v-for="project in projects" :key="project.id" class="carousel-item">
            <ProjectItem
                :title="project.title"
                :description="project.description"
                :image-url="project.image_url"
                :video-url="project.video_url"
                :stack="project.stack"
                :value="project.value"
                :age="project.age"
                :link="project.link"

            />
        </div>
    </div>
</template>

<style scoped>

</style>
