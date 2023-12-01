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
        <div class="box_analise resolvidos_periodo">
            <div class="header_analise header_resolvidos_periodo">
                <h3 class="titulo_analise titulo_casos_periodo">Casos resolvidos</h3>
                <select name="" id="">
                    <option selected value="">Hoje</option>
                    <option value="">7 dias</option>
                    <option value="">2 semanas</option>
                    <option value="">1 mês</option>
                </select>
            </div>
            <div class="box_grafico">
                <canvas id="canva_1"></canvas>
            </div>
        </div>

        <div class="box_analise resolvidos_periodo">
            <div class="header_analise header_resolvidos_periodo">
                <h3 class="titulo_analise titulo_casos_periodo">Casos fracassados</h3>
                <select name="" id="">
                    <option selected value="">Hoje</option>
                    <option value="">7 dias</option>
                    <option value="">2 semanas</option>
                    <option value="">1 mês</option>
                </select>
            </div>
            <div class="box_grafico">
                <canvas id="canva_2"></canvas>
            </div>
        </div>

        <div class="box_analise resolvidos_periodo">
            <div class="header_analise header_resolvidos_periodo">
                <h3 class="titulo_analise titulo_casos_periodo">Casos arquivados</h3>
                <select name="" id="">
                    <option selected value="">Hoje</option>
                    <option value="">7 dias</option>
                    <option value="">2 semanas</option>
                    <option value="">1 mês</option>
                </select>
            </div>
            <div class="box_grafico">
                <canvas id="canva_3"></canvas>
            </div>
        </div>

        <div class="box_analise resolvidos_periodo">
            <div class="header_analise header_resolvidos_periodo">
                <h3 class="titulo_analise titulo_casos_periodo">Casos abertos</h3>
                <select name="" id="">
                    <option selected value="">Hoje</option>
                    <option value="">7 dias</option>
                    <option value="">2 semanas</option>
                    <option value="">1 mês</option>
                </select>
            </div>
            <div class="box_grafico">
                <canvas id="canva_4"></canvas>
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
import Chart from "chart.js/auto"
import { onMounted } from "vue";

// DADOS DO GRÁFICO RESOLVIDOS
const data_chart_1 = {
  labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
  datasets: [{
    label: 'Casos resolvidos por período',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgb(40, 232, 37)',
    ],
    yAxisID: 'yAxis',
    xAxisID: 'xAxis'
  }]
};

// DADOS DO GRÁFICO FRACASSADOS
const data_chart_2 = {
  labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
  datasets: [{
    label: 'Casos fracassados por período',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      '#D42525',
    ],
    yAxisID: 'yAxis',
    xAxisID: 'xAxis'
  }]
};

// DADOS DO GRÁFICO ARQUIVADOS
const data_chart_3 = {
  labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
  datasets: [{
    label: 'Casos arquivados por período',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      '#AEABA4',
    ],
    yAxisID: 'yAxis',
    xAxisID: 'xAxis'
  }]
};

// DADOS DO GRÁFICO ABERTOS
const data_chart_4 = {
  labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
  datasets: [{
    label: 'Casos em aberto por período',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      '#21B7E7',
    ],
    yAxisID: 'yAxis',
    xAxisID: 'xAxis'
  }]
};



// CHAMAR OS GRÁFICOS
onMounted(() =>{
    // GRÁFICO RESOLVIDOS
    const canva_1 = document.querySelector("#canva_1")
    const chart_1 = new Chart(canva_1, {
        type: "bar",
        data: data_chart_1,
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                yAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                },
                xAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                }
            }
        },
    })


    // GRÁFICO FRACASSADOS
    const canva_2 = document.querySelector("#canva_2")
    const chart_2 = new Chart(canva_2, {
        type: "bar",
        data: data_chart_2,
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                yAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                },
                xAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                }
            }
        },
    })


    // GRÁFICO ARQUIVADOS
    const canva_3 = document.querySelector("#canva_3")
    const chart_3 = new Chart(canva_3, {
        type: "bar",
        data: data_chart_3,
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                yAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                },
                xAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                }
            }
        },
    })


    // GRÁFICO ABERTOS
    const canva_4 = document.querySelector("#canva_4")
    const chart_4 = new Chart(canva_4, {
        type: "bar",
        data: data_chart_4,
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                yAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                },
                xAxis:
                {
                    ticks:{
                        color: "#ffffff",
                        font: {
                            size: 14,
                        }
                    }
                }
            }
        },
    })
})

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
.box_analise, .resolvidos_periodo
{
    width: 100%;
    height: fit-content;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    background: #042A4A;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.header_analise, .header_resolvidos_periodo
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    height: 50px;
    margin-top: 5px;
}
.box_grafico
{
    position: relative;
    width: 90%;
    height: fit-content;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}
</style>