<script setup>
import { Link } from '@inertiajs/vue3'
import { defineProps } from 'vue'

// Définition des props
const props = defineProps({
    project: Object, // Recevoir un objet projet complet
});
</script>

<template>
    <Link :href="`/projects/${project.id}`">
        <div class="project-item group overflow-hidden w-72 h-44 bg-gray-200 flex justify-center items-center transition-all duration-500 ease-in-out hover:w-96">
            <img :src="project.image_url" :alt="project.title" class="transition-transform duration-500 transform group-hover:scale-110" />
        </div>
    </Link>
</template>

<style scoped>

</style>
