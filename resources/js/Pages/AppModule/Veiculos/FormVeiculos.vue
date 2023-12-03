<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">VEÍCULO</h2>
            <form class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Placa">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Tipo">
                </div>
                <div class="box_input">
                    <input type="file" placeholder="Imagem">
                </div>
                <div class="box_input">
                    <select>
                        <option value="" disable selected>Disponibilidade</option>
                        <option value="operando">Operando</option>
                        <option value="em manutancao">Em manutanção</option>
                        <option value="disponivel">Disponível</option>
                    </select>
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