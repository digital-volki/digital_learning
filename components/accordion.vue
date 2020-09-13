<template>
  <div class="acc-container" :style="{ backgroundColor: color }" @click="open=!open">
    <div class="title-module">
      <div>
        Приемы разработки 3D-контента.
      </div>
      <div class="label-num">
        7 занятий
      </div>
      <div class="divider" />
      <div class="chevron-btn">
        <chevron />
      </div>
    </div>
    <transition name="fade">
      <vs-row v-if="open" class="description">
        <vs-col w="6">
          Приложения дополненной реальности (AR, augmented reality) - это завтрашний день разработки, и в этом
          направлении
          работают крупнейшие игроки на рынке медиа.
          <ul class="list-themes">
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
        <vs-col offset="3" w="3">
          <clock class="icon-clock" />
          12 часов обучения
        </vs-col>
      </vs-row>
    </transition>
  </div>
</template>

<script>
import Chevron from '@/components/chevron'
import Clock from '@/components/icons/clock'

export default {
  name: 'Accordion',
  components: {
    Chevron,
    Clock
  },
  props: {
    color: {
      type: String,
      required: false,
      default: '#7E72F2'
    }
  },
  data: () => ({
    open: false
  })
}
</script>

<style scoped>

.list-themes{
  color: rgba(255, 255, 255, 0.28);
}

.list-themes>li{
  margin-top: 7px;
}

.list-themes>li>span{
  color: white;
}
.icon-clock {
  margin-bottom: -3px;
}

.description {
  margin-top: 10px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 18px;
  color: #FFFFFF;
}

.description:first-child {
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */
{
  opacity: 0;
}

.divider {
  -webkit-flex-grow: 3;
  flex-grow: 3;
}

.chevron-btn {
  margin-top: 0.4%;
  padding-right: 0;
  margin-right: 0;
}

.label-num {
  margin-left: 2%;
  padding: 4px 20px 5px 20px;
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 18px;
  border-radius: 14px;
  background: rgba(255, 255, 255, 0.28);
}

.title-module {
  -webkit-align-items: center;
  display: flex;
  display: -webkit-flex;
  align-items: center;
}

.acc-container {
  background-color: #7E72F2;
  overflow: hidden;
  border-radius: 16px;
  padding: 20px;
  margin-top: 16px;

  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #FFFFFF;

}

</style>
