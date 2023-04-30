<template>
    <PageLayout>
        <main :class="cnBookScreen()">
            <BookScreenPreview/>
            <BookScreenDescription/>
            <BookScreenScreenshots/>
            <BookScreenDownload/>
        </main>
    </PageLayout>
</template>

<script setup>
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import {cnBookScreen} from "./book-screen.const.js";
import BookScreenPreview from "./book-screen__preview.vue";
import BookScreenDescription from "./book-screen__description.vue";
import BookScreenScreenshots from "./book-screen__screenshots.vue";
import BookScreenDownload from "./book-screen__download.vue";

</script>

<style scoped>

</style>
