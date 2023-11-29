<template>
    <div class="box_cards">
        <div v-for="card in dataCard" :key="card.id" 
        class="card_data">
            <h2 class="titulo_card">{{ card.titulo }}</h2>
            <img class="img_card" :src="card.link_img" alt="">
            <p class="adicional_card">{{ card.info_adicional }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    dataCard: Object,
})
</script>

<style>
    .box_cards
    {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 20px 2%;
        height: fit-content;
    }
    .card_data
    {
        height: 250px;
        width: 32%;
        padding: 10px;
        border-radius: 10px;
        background: #042A4A;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        transition: .2s;
        cursor: pointer;
    }
    .card_data:hover{background: #003142;}
    .titulo_card
    {
        text-align: center;
        font-family: "Inter";
        font-size: 22px;
        font-weight: 700;
        margin-top: 5px;
        margin-bottom: 15px;
    }
    .img_card
    {
        display: block;
        width: 180px;
        height: 120px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 12px;
    }
    .adicional_card
    {
        text-align: center;
        font-family: "Inter";
        font-size: 16px;
        font-weight: 400;
        margin-top: 30px;
    }
</style>