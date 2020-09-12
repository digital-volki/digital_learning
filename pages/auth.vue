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
          <div class="flex">
            <vs-checkbox v-model="remember">
              Remember me
            </vs-checkbox>
            <a href="#">Forgot Password?</a>
          </div>
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

.head-reg{
  margin: 20px;
  font-size: 28px;
}

.cn-form > * {
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
.in-div{
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
</style>
