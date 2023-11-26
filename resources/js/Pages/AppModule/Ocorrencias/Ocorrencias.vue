<template>
    <Header />

    <Nav />

    <main>
        <h1>Ocorrências</h1>
        <Footer />
    </main>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Table from "../../Main/Table.vue";
import Cards from "../../Main/Cards.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormOcorrencia from "./FormOcorrencia.vue";
</script>

<style>

</style>