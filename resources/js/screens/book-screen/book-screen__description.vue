<template>
    <article :class="cnBookScreen('description')">
        <p>{{ model.book.description }}</p>
    </article>
</template>

<script setup>
import {cnBookScreen} from "./book-screen.const.js";
import {bookModel} from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>

</style>
