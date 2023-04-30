<template>
    <button :class="cnButton()">
        <slot/>
    </button>
</template>

<script setup>
import {cnButton} from "./button.const.js";
</script>

<style lang="scss">
.button {

}
</style>
