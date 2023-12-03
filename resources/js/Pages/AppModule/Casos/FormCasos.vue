<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">CASO</h2>
            <div class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Título">
                </div>
                <div class="box_input">
                    <select>
                        <option value="" disabled selected>Situacao</option>
                        <option value="aberto">Aberto</option>
                        <option value="fracassado">Fracassado</option>
                        <option value="resolvido">Resolvido</option>
                        <option value="arquivado">Arquivado</option>
                    </select>
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Responsável">
                </div>
                <div class="box_input">
                    <select>
                        <option value="" disabled selected>Prioridade</option>
                        <option value="baixa">Baixa</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                    </select>
                </div>
                <div class="box_input">
                    <textarea placeholder="Detalhes" rows="12"></textarea>
                </div>
            </div>
            <!-- VITIMA -->
            <h2 class="title_modal">VÍTIMA</h2>
            <div class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Idade">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Profissão">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Gênero">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Peso">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Altura">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Etinia">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Estado do corpo">
                </div>
            </div>
            

            <!-- SUSPEITOS -->
            <ButtonAdd id="add_suspeito" nameButton="Adicionar suspeito" />

            <h2 class="title_modal">Suspeito 1</h2>
            <div class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Idade">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Profissão">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Gênero">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Peso">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Altura">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Etinia">
                </div>
            </div>

            <div class="box_button_under_form">
                <ButtonAdd id="btn_confirm_casos" nameButton="Confirmar" />

                <ButtonDelete id="btn_danger_casos" nameButton="Apagar" />
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