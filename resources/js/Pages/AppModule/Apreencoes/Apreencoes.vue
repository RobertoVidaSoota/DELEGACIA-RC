<template>
    <Header />

    <Nav />

    <main>
        <h1>Apreenções</h1>

        <ButtonAdd nameButton="Adicionar apreenção"/>

        <Cards :dataCard="dataAPI" />

        <Footer />
    </main>

    <FormApreencoes />
</template>

<script setup>
import Nav from "../../Components/Nav.vue";
import Header from "../../Components/Header.vue";
import Footer from "../../Components/Footer.vue"
import Cards from "../../Main/Cards.vue";
import ButtonAdd from "../../Main/ButtonAdd.vue";
import FormApreencoes from "./FormApreencoes.vue";

const dataAPI = [
    {
        titulo: "Suspeito 1",
        link_img: "https://media.istockphoto.com/id/92363990/pt/foto/m%C3%A3o-a-apontar.jpg?s=1024x1024&w=is&k=20&c=h8fQ0xTch-pE4UbK4wKxJ-tG34reh0wG3jiBiNGjoTA=",
        info_adicional: "01/03/2038"
    },
    {
        titulo: "Suspeito 2",
        link_img: "https://media.istockphoto.com/id/171573694/pt/foto/equipe-de-neg%C3%B3cios-de-culpabilizar-os-outros.jpg?s=1024x1024&w=is&k=20&c=skkT_JTO6wbxC0dCj2m6-8cG8qg6O0E-nD8SAkBI-iU=",
        info_adicional: "24/12/2016"
    },
    {
        titulo: "Suspeito 3",
        link_img: "https://media.istockphoto.com/id/171573694/pt/foto/equipe-de-neg%C3%B3cios-de-culpabilizar-os-outros.jpg?s=1024x1024&w=is&k=20&c=skkT_JTO6wbxC0dCj2m6-8cG8qg6O0E-nD8SAkBI-iU=",
        info_adicional: "02/07/2010"
    }
]
</script>

<style>

</style>