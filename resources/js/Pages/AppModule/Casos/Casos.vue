<template>
    <Header />

    <Nav />

    <main>
        <h1>Casos</h1>

        <ButtonAdd @click="modal_casos_effect" id="btn_add_casos" nameButton="Adicionar caso" />

        <Table :tableHeads="tHeads" :dataKeys="dataKeys" :dataTables="data"/>
        <Footer />
    </main>

    <FormCasos v-show="retorno.modalCase == true" id="modal_casos">
        <template #btnClose>
            <div class="box_close_modal">
                <p @click="modal_casos_effect">&times;</p>
            </div>
        </template>
    </FormCasos>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormCasos from "./FormCasos.vue";
import { reactive } from "vue";

const tHeads = ["Número", "Título", "Prioridade", "Data"]
const dataKeys = ["numero_caso", "titulo_caso", "prioridade_caso", "created_at"]
const data = [
    {
        "numero_caso": "1", "titulo_caso": "1 caso", "prioridade_caso": "Média", "created_at": "01/01/2020"
    },
    {
        "numero_caso": "2", "titulo_caso": "2 caso", "prioridade_caso": "Alta", "created_at": "01/01/2020"
    },
    {
        "numero_caso": "3", "titulo_caso": "3 caso", "prioridade_caso": "Baixa", "created_at": "01/01/2020"
    },
]

var retorno = reactive({
    modalCase: false
})

const modal_casos_effect = () => 
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