<script setup>
import {computed, ref, onMounted, reactive} from 'vue'
import AnotherCounter from "@/components/AnotherCounter.vue"

const count = ref(0);
const persons = ref([]);

function increment() {
    count.value++
}

const isCounterLess = computed(() => {
    return count.value > 10 ? 'yes' : 'no'
})

onMounted(()=> {
    getPosts();
})

function getPosts() {
    axios.get('/posts')
        .then(data => {
            persons.value = data.data
        })
}

</script>

<template>
    <button
        type="button"
        @click="increment"
        class="p-2 text-black bg-gray-500 rounded"
    >
        Counter is: {{ count }} {{ isCounterLess }}
    </button>
    <div v-for="person in persons.value">
        <div>{{person.value.id}} {{person.value.title}} {{person.value.description}} {{person.value.likes}}</div>
    </div>
</template>
