<template>
    <Header />

    <Nav />

    <main>
        <h1>Veículos</h1>

        <ButtonAdd nameButton="Adicionar veículo"/>

        <Cards />

        <Footer />
    </main>
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Cards from "../../Main/Cards.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormVeiculos from "./FormVeiculos.vue";
</script>

<style>

</style>