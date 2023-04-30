<template>
    <section :class="cnBookScreen('images')">
        <img
            v-for="screenshot in model.book.screenshots"
            :key="screenshot.id"
            :src="screenshot.src"
            alt="image_preview"
        />
    </section>
</template>

<script setup>
import {cnBookScreen} from "./book-screen.const.js";
import {bookModel} from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>

</style>
