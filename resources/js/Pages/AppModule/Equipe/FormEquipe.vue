<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <form class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="nome">
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import ButtonAdd from "../../Main/ButtonAdd.vue"
import ButtonDelete from "../../Main/ButtonDelete.vue"


</script>

<style>

</style>