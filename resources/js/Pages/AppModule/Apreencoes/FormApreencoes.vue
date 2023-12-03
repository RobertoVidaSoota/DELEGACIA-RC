<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <div class="box_form">
                <form></form>
            </div>
        </div>
    </div>
</template>

<script setup>
import ButtonAdd from "../../Main/ButtonAdd.vue"
import ButtonDelete from "../../Main/ButtonDelete.vue"

const box_close_modal_effect = () => {
    var modal = document.querySelector(".modal_form")
    modal.style.display = "none"
}
</script>

<style>

</style>