<template>
    <nav>
        <ul>
            <li>
                <a href="/inicio">
                    <img src="svg/house-door-fill 1.svg" alt="">
                    <p>Inicio</p>
                </a>
            </li>
            <li>
                <a href="/casos">
                    <img src="svg/folder-check 1.svg" alt="">
                    <p>Casos</p>
                </a>
            </li>
            <li>
                <a href="/ocorrencias">
                    <img src="svg/card-heading 1.svg" alt="">
                    <p>Ocorrências</p>
                </a>
            </li>
            <li>
                <a href="/denuncias">
                    <img src="svg/headset 1.svg" alt="">
                    <p>Denúncias</p>
                </a>
            </li>
            <li>
                <a href="/apreencoes">
                    <img src="svg/archive-fill 1.svg" alt="">
                    <p>Apreenções</p>
                </a>
            </li>
            <li>
                <a href="/equipe">
                    <img src="svg/people-fill 1.svg" alt="">
                    <p>Equipe</p>
                </a>
            </li>
            <li>
                <a href="/equipamento">
                    <img src="svg/box-seam.svg" alt="">
                    <p>Equipamento</p>
                </a>
            </li>
            <li>
                <a href="/veiculos">
                    <img src="svg/car-front-fill.svg" alt="">
                    <p>Veiculos</p>
                </a>
            </li>
            <li>
                <a href="/relatorios">
                    <img src="svg/clipboard-data 1.svg" alt="">
                    <p>Relatórios</p>
                </a>
            </li>
            <li>
                <a href="/configuracoes">
                    <img src="svg/gear-fill 1.svg" alt="">
                    <p>Configurações</p>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script setup>
</script>

<style>
nav ul li
{
    width: 100%;
    height: 40px;
    color: #FFF;
    font-family: "Inter";
    font-size: 14px;
    transition: .4s;
}
a
{
    display: flex;
    align-items: center;
    text-decoration: none;
    height: 40px;
    transition: .4s;
}
a:hover
{
    border-bottom: 1px solid #fff;
}
a p{margin-left: 10px;}
img
{
    display: block;
    margin-left: 25px;
    width: 16px;
    height: 16px;
}
</style>