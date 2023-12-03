<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">RELATÓRIO</h2>
            <form class="box_form">
                <div class="box_input w-100">
                    <input type="text" placeholder="Título">
                </div>
                <div class="box_input w-100">
                    <textarea placeholder="Texto"></textarea>
                </div>
                <div class="box_button_under_form">
                    <ButtonAdd id="btn_confirm_casos" nameButton="Confirmar" />

                    <ButtonDelete id="btn_danger_casos" nameButton="Apagar" />
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
.w-100{width: 100% !important;}
</style>