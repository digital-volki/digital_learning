<template>
  <vs-row class="container-single">
    <vs-col w="6">
      <img class="img-head" src="/img/icon.png" alt="">
    </vs-col>
    <vs-col w="6" class="head-desc">
      <h2>
        Разработка AR приложений
      </h2>
      <h5>
        Приложения дополненной реальности (AR, augmented reality) - это завтрашний день разработки, и в этом направлении
        работают крупнейшие игроки на рынке медиа.
        <br>
        <br>
        Вы научитесь работать в программах создания 3д моделей, таких как Unity, Blender и т.д. Также по окончании курса
        вы получите медаль «AR проектировщик».
      </h5>
      <vs-row>
        <vs-button
          class="btn-main"
          circle
          border
          color="#7E72F2"
        >
          Карта изучения
        </vs-button>
        <vs-button
          class="btn-main"
          circle
          color="#7E72F2"
        >
          Записаться
        </vs-button>
      </vs-row>
    </vs-col>
    <vs-col w="12" class="content">
      <div class="title-static">
        Программа курса
      </div>
      Профессия состоит из 47 занятий в формате вебинаров, видеозаписей и практических заданий.
      <br>
      <br>
      <accordion color="#6FCF97" />
      <accordion />
      <accordion />
      <div class="title-static">
        Что вы получите
      </div>
      <vs-row>
        <vs-col w="6">
          <div class="card-pro">
            AR
          </div>
        </vs-col>
        <vs-col w="6">
          block
        </vs-col>
      </vs-row>
    </vs-col>
  </vs-row>
</template>

<script>
import Accordion from '@/components/accordion'

export default {
  name: 'SingleProf',
  components: { Accordion },
  layout: 'prof'
}
</script>

<style scoped>

.card-pro{

}

.content {
  margin: 20px;
}

.title-static {
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 37px;

  color: #2C2C2C;
}

.btn-main {
  padding: 6px 30px 6px 30px;
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
}

.head-desc {
  padding-top: 30px;
  padding-left: 21px;
  padding-right: 30px;
}

.head-desc > h5 {
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 18px;

  /* Black */

  color: #2C2C2C;
}

.head-desc > h2 {
  font-style: normal;
  font-weight: bold;
  font-size: 40px;
  line-height: 46px;
  color: #2C2C2C;
}

.img-head {
  width: 100%;
}

.container-single {
  margin-top: 63px;
  border-radius: 15px;
  box-shadow: 0 0 10px #c4c1c1;
  overflow: hidden;
}

</style>
