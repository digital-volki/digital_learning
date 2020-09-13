<template>
  <div class="Registbc">
    <div class="title">
      Регистрация
    </div>
    <div>
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="4">
          <img class="KartonkaAva" src="phote.svg" alt="logo">
        </vs-col>
        <vs-col vs-type="flex" vs-align="center" class="VSfam" justify="space-between" w="8">
          <vs-input
            v-model="value1"
            class="Familiya"
            label="Фамилия*"
            placeholder="Ваша фамилия"
          />
          <vs-row class="marg-nn">
            <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
              <vs-input
                class="Name"
                v-model="value2"
                label="Имя*"
                placeholder="Введите имя"
              />
            </vs-col>
            <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
              <vs-input
                class="Otchestvo"
                v-model="value3"
                label="Отчество*"
                placeholder="Введите отчество"
              />
            </vs-col>
          </vs-row>
        </vs-col>
      </vs-row>
      <vs-row class="row-m">
        <vs-input
          class="btndata"
          v-model="value7"
          w="6"
          type="date"
          label="Date"
        />
        <vs-button
          class="btmman"
          w="3"
          :active="active_s == 0"
          @click="active_s = 0"
        >
          Мужчина
        </vs-button>
        <vs-button
          class="btnwomen"
          w="3"
          :active="active_s == 1"
          @click="active_s = 1"
        >
          Женщина
        </vs-button>
      </vs-row>
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
          <vs-input v-model="value4" placeholder="e-mail" />
        </vs-col>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
          <vs-input v-model="value5" placeholder="Телефон" />
        </vs-col>
      </vs-row>
      <vs-button
        class="btndalee"
        to="/reg/2"
        @click="active = 0"
      >
        Далее
      </vs-button>
    </div>
  </div>
</template>

<script>
export default {
  layout: 'registration',
  name: 'RegMain1',
  data: () => ({
    value: '',
    active_s: null
  }
  )
}
</script>

<style scoped>
.title {
  text-align: center;
  margin-bottom: 15px;
}

.row-m {
  margin-top: 20px;
}

.Registbc{
  margin-top: 190px;
  overflow: hidden;
  width: 600px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 10px;
  box-shadow: 0.1px 2px 2px 1px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);

}
.title {
  padding-top: 10px;
  padding-bottom: 9px;
  text-align: center;
  background: #7E72F2;
  width: 100%;
  color: #F5F5F5;
  font-size: 20px;
}
.marg-nn{
  margin-top: 20px;
}
.VSfam{
  margin-top: 27px;
  width: 399px;
}
.KartonkaAva{
  margin-top: 16px;
  width: 180px;
  margin-left: 10px;
}
.btndalee{
  margin-left: auto;
  margin-right: auto;
  font-size: 20px;
  width: 165px;
}
.btmman{
  width: 150px;
}
.btnwomen{
  width: 150px;
}
.btndata{
  width: 240px;
}
</style>
