<template>
    <Header />

    <Nav />

    <main>
        <h1>Equipamento</h1>

        <ButtonAdd nameButton="Adicionar equipamento"/>

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
import FormEquipamento from "./FormEquipamento.vue";
</script>

<style>

</style>