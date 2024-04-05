<script setup>
import { ref } from 'vue'

const counter = ref(0)
</script>

<template>
    <button
        type="button"
        @click="counter++"
        class="p-2 text-black bg-gray-500 rounded"
        >
        Another Counter is: {{counter}}
    </button>
</template>
