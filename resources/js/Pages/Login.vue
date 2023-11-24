<template>
  <main class="main-login">

    <aside class="aside-login">

      <div class="box-login">
        <h2 class="title-login">Login do usuário</h2>
        <form @submit.prevent="" class="form-login">
          <div class="box-input">
            <input type="email" placeholder="Email" autocomplete="0ff" class="input-login">
          </div>
          <div class="box-input">
            <input type="password" placeholder="Senha" autocomplete="0ff" class="input-login">
          </div>
          <div class="group-button-check">
            <button class="btn-login">
              Entrar
            </button>
            <div class="box-check">
              <input type="checkbox">
              <p class="text-lembrar">Lembrar</p>
            </div>
          </div>
        </form>
      </div>
    </aside>

    <aside class="aside-login">

      <h1 class="title-1-login">SISTEMA DEPARTAMENTO 024</h1>

      <img class="img-login" src="img/IMAGEM_LOGIN.png" alt="IMAGEM LOGIN">

    </aside>
  </main>
</template>



<script setup>
</script>



<style>
body
{
    background: linear-gradient(0deg, #0E1643 0%, 
  rgb(13, 35, 145) 142.36%) !important;
}
main.main-login{
  display: flex;
  justify-content: space-around;
  margin-top: 80px;
  width: 90%;
  height: 98vh;
}
aside.aside-login{
  width: 40%;
  height: fit-content;
}
.box-login
{
  width: 100%;
  height: 486px;
  background: #1D3369;
  opacity: 1.2;
  border-radius: 20px;
  padding: 0.1px 50px;
}
h2.title-login
{
  margin-top: 80px;
  color: #21B7E7;
  font-family: "Inter";
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
}
form.form-login
{
    margin-top: 60px;
}
input.input-login
{
    width: 100%;
}
.group-button-check
{
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: fit-content;
}
button.btn-login{
    width: 220px;
    height: 40px;
    border-radius: 5px;
    background: #21B7E7;
    border: none;
    outline: none;
    color: #000;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    cursor: pointer;
    transition: .4s;
}
.box-check
{
  width: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.text-lembrar
{
  width: fit-content;
  color: #FFF;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
}



h1.title-1-login{
  width: 100%;
  color: #FFF;
  font-size: 46px;
  font-style: normal;
  font-weight: 700;
}
img.img-login
{
  display: block;
  margin-right: auto;
  margin-left: auto;
  margin-top: 90px;
}
</style>