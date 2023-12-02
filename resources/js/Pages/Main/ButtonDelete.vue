<template>
    <button class="btn-delete" type="button">
        {{ nameButton }}
    </button>
</template>

<script setup>
defineProps({
    nameButton: String,
})
</script>

<style>
    button.btn-delete
    {
        color: #fff;
        font-family: "Inter";
        font-size: 16px;
        font-weight: 700;
        outline: none;
        border: none;
        padding: 10px 53px 10px 53px;
        border-radius: 5px;
        background: #D42525;
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>