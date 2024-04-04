<script setup>
// Définition des props
const props = defineProps({
    title: String,
    description: String,
    imageUrl: String,
    videoUrl: String,
    stack: String,
    value: String,
    age: String,
    link: String,
});
</script>

<template>
    <div>
        <h3>titre: {{ title }}</h3>
        <p>description: {{ description }}</p>
        <p>image url:{{imageUrl}}</p>
        <p>video url:{{videoUrl}}</p>
        <p>stack :{{stack}}</p>
        <p>recommendation :{{value}}</p>
        <p>age :{{age}}</p>
        <p>lien :{{link}}</p>
    </div>
</template>

<style scoped>

</style>
