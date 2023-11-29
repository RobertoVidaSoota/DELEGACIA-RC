<template>
    <button class="btn-add" type="button">
        {{ nameButton }}
    </button>
</template>

<script setup>
defineProps({
    nameButton: String,
})
</script>

<style>
    button.btn-add
    {
        color: #000;
        font-family: "Inter";
        font-size: 16px;
        font-weight: 700;
        outline: none;
        border: none;
        padding: 10px 53px 10px 53px;
        border-radius: 5px;
        background: #28E825;
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>