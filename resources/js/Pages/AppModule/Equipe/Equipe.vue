<template>
    <Header />

    <Nav />

    <main>
        <h1>Equipe</h1>

        <ButtonAdd nameButton="Adicionar soldado"/>

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
import FormEquipe from "./FormEquipe.vue";
</script>

<style>

</style>