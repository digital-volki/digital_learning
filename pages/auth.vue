<template>
  <div class="top-container">
    <div class="logo">
      <img alt="logo" src="icon.png" class="logo">
    </div>
    <div class="content-inputs">
      <div class="content-inputs">
        <div class="head-reg">
          Вход в личный кабинет
        </div>
        <div class="cn-form center">
          <vs-input v-model="email" placeholder="Email" class="in-div" />
          <vs-input v-model="password" type="password" placeholder="Password" class="in-div" />
          <div class="flex" />
          <vs-button class="center">
            Вход
          </vs-button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  layout: 'default',
  name: 'Auth'
}
</script>

<style scoped>
  .top-container {
    display: -webkit-flex;
    -webkit-flex-direction: column;
    display: flex;
    flex-direction: column;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
  }

  .head-reg {
    margin: 20px;
    font-size: 28px;
  }

  .cn-form > * {
    margin-top: 7px;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
  }

  .in-div {
    width: 230px;
  }

  .content-inputs {
    margin-right: auto;
    margin-left: auto;
  }

  .logo {
    margin-right: auto;
    margin-left: auto;
  }

  .center {
    width: 200px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
  }
</style>

<style lang="scss">
</style>
