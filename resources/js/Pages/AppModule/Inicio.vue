<template>
    <Header />

    <Nav />

    <main>
        <h1>Inicio</h1>

        <div class="box_number_cards">
            <div class="number_card">
                <h3 class="resolvidos">Casos resolvidos</h3>
                <p>23</p>
            </div>
            <div class="number_card">
                <h3 class="fracassados">Casos fracassados</h3>
                <p>23</p>
            </div>
            <div class="number_card">
                <h3 class="arquivados">Casos arquivados</h3>
                <p>23</p>
            </div>
            <div class="number_card">
                <h3 class="abertos">Casos em aberto</h3>
                <p>23</p>
            </div>
        </div>

        <!-- GRÁFICOS -->
        <div class="resolvidos_periodo">
            <div class="header_resolvidos_periodo">
                <h3 class="titulo_casos_periodo">Casos</h3>
                <select name="" id="">
                    <option selected value="">Hoje</option>
                    <option value="">7 dias</option>
                    <option value="">2 semanas</option>
                    <option value="">1 mês</option>
                </select>
            </div>
        </div>

        <Footer />
    </main>
</template>

<script setup>
import Nav from "../Components/Nav.vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue"
import Table from "../Main/Table.vue";
import Cards from "../Main/Cards.vue";
import ButtonAdd from "../Main/ButtonAdd.vue";
</script>



<style>
.box_number_cards
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    height: fit-content;
    margin-bottom: 20px;
}
.number_card
{
    width: 22%;
    height: fit-content;
    padding: 15px;
    border-radius: 10px;
    background: #042A4A;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.box_number_cards h3,
.box_number_cards p{text-align: center;}
.box_number_cards h3
{
    margin-top: 8px;
    font-family: "Inter";
    font-size: 20px;
    font-weight: 700;
}
.box_number_cards p
{
    margin-top: 20px;
    font-family: "Inter";
    font-size: 20px;
    font-weight: 400;
}
.resolvidos{color: #28E825;}
.fracassados{color: #D42525;}
.arquivados{color: #AEABA4;}
.abertos{color: #21B7E7;}

/* GRÁFICOS */
.resolvidos_periodo
{
    width: 100%;
    height: 350px;
    padding: 10px;
    border-radius: 10px;
    background: #042A4A;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.header_resolvidos_periodo
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    height: 50px;
    margin-top: 5px;
}
</style>