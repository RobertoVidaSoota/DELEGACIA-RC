<template>
    <Header />

    <Nav />

    <main>
        <h1>Denúncias</h1>

        <ButtonAdd nameButton="Adicionar denúnica"/>

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
import FormDenuncias from "./FormDenuncias.vue";
</script>

<style>

</style>