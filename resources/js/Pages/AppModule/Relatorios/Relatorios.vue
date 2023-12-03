<template>
    <Header />

    <Nav />

    <main>
        <h1>Relatórios</h1>

        <ButtonAdd @click="modal_effect" nameButton="Adicionar relatório"/>

        <Table />

        <Footer />
    </main>

    <FormRelatorios v-show="retorno.modalCase == true">
        <template #btnClose>
            <div class="box_close_modal">
                <p @click="modal_effect">&times;</p>
            </div>
        </template>
    </FormRelatorios>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormRelatorios from "./FormRelatorios.vue";
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