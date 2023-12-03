<template>
    <Header />

    <Nav />

    <main>
        <h1>Equipamento</h1>

        <ButtonAdd @click="modal_effect" nameButton="Adicionar equipamento"/>

        <Cards />

        <Footer />
    </main>

    <FormEquipamento v-show="retorno.modalCase == true">
        <template #btnClose>
            <div class="box_close_modal">
                <p @click="modal_effect">&times;</p>
            </div>
        </template>
    </FormEquipamento>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Cards from "../../Main/Cards.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormEquipamento from "./FormEquipamento.vue";
import { reactive } from "vue";

var retorno = reactive({
    modalCase: false
})

const modal_effect = () => 
{
    if(retorno.modalCase == false)
    {
        retorno.modalCase = true
    }
    else
    {
        retorno.modalCase = false
    }
}
</script>

<style>

</style>