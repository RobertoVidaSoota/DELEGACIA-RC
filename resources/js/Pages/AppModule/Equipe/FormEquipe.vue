<template>
    <div class="modal_form">
        <div class="modal_form_content">
            <slot name="btnClose"></slot>
            <h2 class="title_modal">SOLDADO</h2>
            <form class="box_form">
                <div class="box_input">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="box_input">
                    <input type="text" placeholder="Posto">
                </div>
                <div class="box_input">
                    <input type="file" placeholder="Imagem">
                </div>
                <div class="box_input">
                    <select>
                        <option value="" disabled selected>Disponibilidade</option>
                        <option value="folga">Folga</option>
                        <option value="licensa">Licença</option>
                        <option value="descanso">Descanso</option>
                        <option value="operando">Operando</option>
                        <option value="disponivel">Disponível</option>
                    </select>
                </div>

                <h2 class="title_modal">EQUIPAMENTO</h2>
                <ButtonAdd id="btn_add_equipamento" nameButton="Adicionar equipamento" />
                <div class="box_input w-100">
                    <input type="text" placeholder="Equipamento">
                </div>

                <h2 class="title_modal">VEICULOS</h2>
                <ButtonAdd id="btn_add_veiculo" nameButton="Adicionar veículo" />
                <div class="box_input w-100">
                    <input type="text" placeholder="Nome do veículo">
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