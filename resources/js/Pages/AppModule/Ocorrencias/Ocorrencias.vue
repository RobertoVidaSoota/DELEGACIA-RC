<template>
    <Header />

    <Nav />

    <main>
        <h1>Ocorrências</h1>

        <ButtonAdd @click="modal_effect" nameButton="Adicionar ocorrência"/>

        <Table />

        <Footer />
    </main>

    <FormOcorrencia v-show="retorno.modalCase == true">
        <template #btnClose>
            <div class="box_close_modal">
                <p @click="modal_effect">&times;</p>
            </div>
        </template>
    </FormOcorrencia>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormOcorrencia from "./FormOcorrencia.vue";
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