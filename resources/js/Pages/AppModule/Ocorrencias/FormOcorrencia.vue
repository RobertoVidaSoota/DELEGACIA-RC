<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">OCORRÊNCIA</h2>
            <form class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="tipo">
                </div>
                <div class="box_input">
                    <select>
                        <option value="" disabled selected>Situação</option>
                        <option value="em espera">Em espera</option>
                        <option value="atendendo">Atendendo</option>
                        <option value="resolvido">Resolvido</option>
                        <option value="fracassada">Fracassada</option>
                    </select>
                </div>
                <div class="box_input">
                    <textarea placeholder="Detalhes"></textarea>
                </div>
                
                <h2 class="title_modal">SOLDADOS</h2>
                <ButtonAdd id="btn_add_soldado" nameButton="Adicionar soldado" />
                <div class="box_input w-100">
                    <input type="text" placeholder="Nome soldado">
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