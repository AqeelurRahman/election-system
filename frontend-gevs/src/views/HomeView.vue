<script setup lang="ts">
import TheWelcome from '../components/TheWelcome.vue';
console.log('BaseURL :', import.meta.env.VITE_BASE_URL);
</script>

<template>
  <main>
    <TheWelcome />
  </main>
</template>
