<template>
    <section :class="cnBookScreen()">
        <h2>
            {{ model.book.name }}
        </h2>
    </section>
</template>

<script setup>
import {cnBookScreen} from "./book-screen.const.js";
import {bookModel} from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>

</style>
