<template>
    <Header />

    <Nav />

    <main>
        <h1>Relatórios</h1>

        <ButtonAdd nameButton="Adicionar relatório"/>

        <Table />

        <Footer />
    </main>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormRelatorios from "./FormRelatorios.vue";
</script>

<style>

</style>