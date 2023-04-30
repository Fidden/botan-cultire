<template>
    <section :class="cnBookScreen('download')">
        <img
            :src="model.book.poster"
            :alt="model.book.name"
        />

        <a
            target="_blank"
            :href="model.book.url"
        >
            Скачать
        </a>
    </section>
</template>

<script setup>
import {cnBookScreen} from "./book-screen.const.js";
import {bookModel} from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>

</style>
