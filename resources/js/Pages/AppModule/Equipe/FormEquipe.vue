<template>
    <div class="modal_form">
        <div class="modal_form_content">
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

const box_close_modal_effect = () => {
    var modal = document.querySelector(".modal_form")
    modal.style.display = "none"
}
</script>

<style>

</style>