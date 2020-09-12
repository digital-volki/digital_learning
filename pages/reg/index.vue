<template>
  <div>
    <div class="title">
      Регистрация
    </div>
    <div>
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="4">
          <img src="phote.svg" alt="logo">
        </vs-col>
        <vs-col vs-type="flex" vs-align="center" class="content-inputs" justify="space-between" w="8">
          <vs-input v-model="value" class="in-ln" placeholder="Фамилия" />
          <vs-row>
            <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
              <vs-input v-model="value" placeholder="Имя" />
            </vs-col>
            <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
              <vs-input v-model="value" placeholder="Очество" />
            </vs-col>
          </vs-row>
        </vs-col>
      </vs-row>
      <vs-row class="row-m">
        <vs-input
          v-model="value7"
          w="6"
          type="date"
          label="Date"
        />
        <vs-button
          w="3"
          :active="active_s == 0"
          @click="active_s = 0"
        >
          Мужчина
        </vs-button>
        <vs-button
          w="3"
          :active="active_s == 1"
          @click="active_s = 1"
        >
          Женщина
        </vs-button>
      </vs-row>
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
          <vs-input v-model="value" placeholder="e-mail" />
        </vs-col>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="6">
          <vs-input v-model="value" placeholder="Телефон" />
        </vs-col>
      </vs-row>
      <vs-button
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
</style>
