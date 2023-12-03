<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <div class="box_form">
                <form></form>
            </div>
        </div>
    </div>
</template>

<script setup>
import ButtonAdd from "../../Main/ButtonAdd.vue"
import ButtonDelete from "../../Main/ButtonDelete.vue"


</script>

<style>

</style>