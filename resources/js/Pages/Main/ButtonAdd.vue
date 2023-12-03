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

    /* CSS MODAL */
    .box_close_modal
    {
        margin: 15px 0;
        height: fit-content;
    }
    .box_close_modal p
    {
        color: #000;
        font-size: 40px;
        width: fit-content;
        font-weight: 500;
        margin-left: auto;
        cursor: pointer;
    }
    .modal_form
    {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.6);
        overflow-y: hidden;
    }
    .modal_form_content
    {
        background: #fff;
        width: 82%;
        height: 85vh;
        border-radius: 15px;
        padding: 20px 50px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        margin-bottom: 30px;
        overflow-y: auto;
        z-index: 30;
    }
    .box_form
    {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 25px;
    }
    .box_input
    {
        width: 48%;
        height: fit-content;
        margin-bottom: 25px;
    }
    .box_input input, .box_input select
    {
        width: 100% !important;
    }
    .box_input textarea
    {
        width: 100% !important;
        height: 150px !important;
        padding-top: 10px;
    }
    .title_modal
    {
        text-align: center;
        color: #000;
        margin-bottom: 25px;
        font-size: 20px;
        font-weight: 700;
    }
    .box_button_under_form
    {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: fit-content;
    }

</style>