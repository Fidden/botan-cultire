<template>
    <BookScreen/>
</template>

<script setup>
import BookScreen from "@/screens/book-screen/book-screen.vue";
import {bookModel} from "@/screens/book-screen/book-screen.model.js";

const props = defineProps({
    book: Object
});

const model = bookModel();
model.init(props.book.data);
</script>

<style scoped>

</style>
