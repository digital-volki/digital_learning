<template>
  <div class="center examplex head">
    <vs-navbar
      v-model="active"
      class="Head-in"
      color="#7E72F2"
      text-white
      square
      center-collapsed
    >
      <template #left>
        <nuxt-link to="/">
          <img class="logotype" src="/img/logo.svg" alt="logo">
        </nuxt-link>
        <nuxt-link to="/mainpage">
          <vs-navbar-item id="guide" class="Nav-bar" :active="active == 'Профессии'">
            Профессии
          </vs-navbar-item>
        </nuxt-link>
      </template>
      <template #right>
        <vs-button class="Login" color="#fff" flat >Вход</vs-button>
        <vs-button class="Registration" color="#fff" border >Регистрация</vs-button>
      </template>
    </vs-navbar>
    <div class="square">
      <div class="child">
        child 1
      </div>
      <div class="child">
        child 2
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Header',
  active: 'guide'
}
</script>

<style scoped>
  .Head-in {
    height: 80px;
  }

  .Nav-bar {
    margin-left: 81px;
    margin-bottom: 1px;
    font-size: 20px;
    text-align: left;
    color: #F5F5F5;
  }

  .logotype {
    margin-left: 58px;
    margin-bottom: 24px;
    margin-top: 24px;
    text-align: center;
  }

  .head {
    color: #ff4500;
  }
  .Login{
    font-size: 18px;
  }
  .Registration{
    font-size: 18px;
  }
</style>
