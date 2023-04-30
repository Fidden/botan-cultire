<template>
    <Link
        :class="cnHeader('logo')"
        href="/"
    >
        <h1>Botan</h1>
    </Link>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {cnHeader} from "@/shared/components/header/header.const.js";
</script>

<style lang="scss">

</style>
