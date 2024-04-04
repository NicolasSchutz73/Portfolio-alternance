<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-800 text-white">
        <span>logo temporaire</span> <!-- Mettre à jour le logo -->
        <h1 class="text-4xl mb-6">Who's watching?</h1>
        <Link href="/home" class="flex flex-col items-center no-underline text-white">
            <div class="w-24 h-24 bg-gray-700 rounded-full flex items-center justify-center mb-2">
                <span class="text-2xl">👤</span> <!-- Remplacer par une image -->
            </div>
            <span class="text-xl">Recruteur</span>
        </Link>
    </div>
</template>

<style>
.no-underline {
    text-decoration: none;
}
</style>
