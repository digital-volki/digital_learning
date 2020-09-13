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
            <vs-row align="center">
              <vs-col w="4">
                <img src="/img/examplePersona.png" alt="example_persona">
              </vs-col>
              <vs-col w="8">
                AR разработчик
              </vs-col>
              <vs-col w="12">
                <hr>
                <span class="card-title">
                  Знания
                </span>
                <ul class="knowledge-list">
                  <li>
                    <span>
                      Вводная лекция о содержании курса.
                    </span>
                  </li>
                  <li>
                    <span>
                      Интерфейс программы Blender. Основы работы с программой.
                    </span>
                  </li>
                  <li>
                    <span>
                      Draft. Что такое, зачем нужен.
                    </span>
                  </li>
                </ul>
                <span class="card-title">
                  Навыки
                </span>
                <ul class="knowledge-list">
                  <li>
                    <span>
                      Вводная лекция о содержании курса.
                    </span>
                  </li>
                  <li>
                    <span>
                      Интерфейс программы Blender. Основы работы с программой.
                    </span>
                  </li>
                  <li>
                    <span>
                      Draft. Что такое, зачем нужен.
                    </span>
                  </li>
                </ul>
              </vs-col>
            </vs-row>
          </div>
        </vs-col>
        <vs-col w="5" offset="1" class="tools">
          <div class="tools-title">
            Инструменты, которые вы изучите
          </div>
          <hr>
          <vs-row>
            <vs-col v-for="(logo, index) in logos" :key="index" vs-align="center" vs-justify="space-around" w="3">
              <div class="item-tech">
                <img src="/img/diagram.svg" alt="logo">
              </div>
            </vs-col>
          </vs-row>
          <div class="title-static">
            Draw.io
          </div>
          Инструмент, который позволяет создавать блок-схемы, сетевые диаграммы, интеллект-карты, отношения сущностей, программные блоки.
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
  layout: 'prof',
  data: () => ({
    logos: [1, 2, 2, 2, 2, 2]
  })
}
</script>

<style scoped>

.item-tech{
  /*background-color: #7E72F2;*/
  /*padding: 15px;*/
  margin-left: auto;
  margin-right: auto;
  /*border: 2px solid #7E72F2;*/
}

.tools-title{
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 28px;
  color: #2C2C2C;
}

.knowledge-list {
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 16px;
}

.knowledge-list > li {
  margin-top: 8px;
}

.knowledge-list > li > span {
  color: #2C2C2C;
}

.card-title {
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;

  color: #2C2C2C;
}

.card-pro {
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 28px;
  color: #999999;
  padding: 32px;
  border-radius: 16px;
  border: 4px solid #7E72F2;
  border-left: 40px solid #7E72F2;
}

.content {
  margin: 20px;
}

.title-static {
  margin-top: 15px;
  margin-bottom: 15px;
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
