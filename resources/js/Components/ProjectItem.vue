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
        <div>
            <h3>titre: {{project.title}}</h3>
        </div>
    </Link>
</template>

<style scoped>

</style>
