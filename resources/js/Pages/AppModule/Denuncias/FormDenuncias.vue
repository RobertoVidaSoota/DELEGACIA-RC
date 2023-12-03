<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">DENÚNCIA</h2>
            <form class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Telefone">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Tipo">
                </div>
                <div class="box_input">
                    <select>
                        <option value="">Disponibilidade</option>
                        <option value="ativada">Ativada</option>
                        <option value="desativada">Desativada</option>
                    </select>
                </div>
                <div class="box_input">
                    <textarea placeholder="Detalhes"></textarea>
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

</style>