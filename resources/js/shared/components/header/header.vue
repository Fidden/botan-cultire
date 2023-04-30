<template>
    <header :class="cnHeader()">
        <HeaderLogo/>
    </header>
</template>

<script setup>
import {cnHeader} from "./header.const.js";
import HeaderLogo from './header__logo.vue';
</script>

<style scoped>

</style>
