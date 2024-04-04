<script setup>
const { project } = defineProps({
    project: Object,
});
</script>

<template>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold">{{ project.title }}</h1>
        <img :src="project.image_url" alt="Image du projet" class="max-w-full h-auto">
        <p>{{ project.description }}</p>
    </div>
</template>

<style scoped>

</style>
