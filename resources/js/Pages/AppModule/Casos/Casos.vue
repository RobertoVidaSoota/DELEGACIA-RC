<template>
    <Header />

    <Nav />

    <main>
        <h1>Casos</h1>

        <ButtonAdd nameButton="Adicionar caso" />

        <Table :tableHeads="tHeads" :dataTables="data"/>
        <Footer />
    </main>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormCasos from "./FormCasos.vue";

const tHeads = ["Número", "Título", "Prioridade", "Data"]
const data = [
    {
        "Número": "1", "Título": "1 caso", "Prioridade": "Média", "Data": "01/01/2020"
    },
    {
        "Número": "2", "Título": "2 caso", "Prioridade": "Alta", "Data": "01/01/2020"
    },
    {
        "Número": "3", "Título": "3 caso", "Prioridade": "Baixa", "Data": "01/01/2020"
    },
]

</script>

<style>

</style>