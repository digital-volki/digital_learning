<template>
  <div>
    <h1>Профессия</h1>
    <vs-row>
      <vs-col
        vs-type="flex"
        vs-justify="center"
        vs-align="center"
        w="3"
      >
        <!--кнопка сорта по популярности-->
        <div class="center con-selects sort-rr">
          <vs-select
            v-for="(color, i) in colors"
            :key="i"
            v-model="color.value"
            class="SortSS"
            :color="color.color"
            placeholder="Select"
          >
            <vs-option label="Сорт. по популярности" value="1">
              Сортировать по популярности
            </vs-option>
            <!--Направления-->
          </vs-select>
          <div class="Naprav">
            Направления
          </div>

          <div class="center Btnnp">
            <vs-button
              color="#7E72F2"
              border
              :active="active == 0"
              @click="active = 0"
            >
              Все направления
            </vs-button>

            <vs-button
              color="#7E72F2"
              border
              :active="active == 1"
              @click="active = 1"
            >
              Программирование
            </vs-button>

            <vs-button
              color="#7E72F2"
              border
              :active="active == 2"
              @click="active = 2"
            >
              Технологии
            </vs-button>

            <vs-button
              color="#7E72F2"
              border
              :active="active == 3"
              @click="active = 3"
            >
              Автошкола дизайна
            </vs-button>
            <div class="Dlit">
              <p>Длительность</p>
            </div>

            <vs-tooltip v-model="activeTooltip1" bottom shadow not-hover>
              <vs-input v-model="valueMonth1" placeholder="От 2 месяцев" @keyup="onChangeValues">
                Click Delete User
              </vs-input>
              <template #tooltip>
                <div class="content-tooltip">
                  <footer>
                    <vs-button danger block @click="activeTooltip1=false">
                      Показать
                    </vs-button>
                  </footer>
                </div>
              </template>
            </vs-tooltip>
            <vs-tooltip shadow interactivity>
              <template #tooltip>
                <div class="content-tooltip">
                  <div class="body">
                    <div class="text">
                      Cosed Tasks
                      <span>
                        89
                      </span>
                    </div>
                    <vs-avatar circle size="80" @click="activeTooltip1=!activeTooltip1">
                      <img src="/avatars/avatar-5.png" alt="">
                    </vs-avatar>
                    <div class="text">
                      Open Tasks
                      <span>
                        8
                      </span>
                    </div>
                  </div>
                  <footer>
                    <vs-button circle icon border>
                      <i class="bx bxs-share-alt" />
                    </vs-button>
                    <vs-button circle>
                      Message
                    </vs-button>
                    <vs-button circle icon border>
                      <i class="bx bx-like" />
                    </vs-button>
                  </footer>
                </div>
              </template>
            </vs-tooltip>

            <vs-tooltip v-model="activeTooltip2" bottom shadow not-hover>
              <vs-input v-model="valueMonth2" placeholder="До 24 месяцев" @keyup="onChangeValues">
                Click Delete User
              </vs-input>
              <template #tooltip>
                <div class="content-tooltip">
                  <h4 class="center">
                    Показать?
                  </h4>
                  <p>
                    You are sure to delete this user, by doing so you cannot recover the data
                  </p>
                  <footer>
                    <vs-button danger block @click="activeTooltip1=false">
                      Delete
                    </vs-button>
                    <vs-button transparent dark block @click="activeTooltip1=false">
                      Cancel
                    </vs-button>
                  </footer>
                </div>
              </template>
            </vs-tooltip>
            <vs-tooltip shadow interactivity>
              <template #tooltip>
                <div class="content-tooltip">
                  <div class="body">
                    <div class="text">
                      Cosed Tasks
                      <span>
                        89
                      </span>
                    </div>
                    <vs-avatar circle size="80" @click="activeTooltip1=!activeTooltip1">
                      <img src="/avatars/avatar-5.png" alt="">
                    </vs-avatar>
                    <div class="text">
                      Open Tasks
                      <span>
                        8
                      </span>
                    </div>
                  </div>
                  <footer>
                    <vs-button circle icon border>
                      <i class="bx bxs-share-alt" />
                    </vs-button>
                    <vs-button circle>
                      Message
                    </vs-button>
                    <vs-button circle icon border>
                      <i class="bx bx-like" />
                    </vs-button>
                  </footer>
                </div>
              </template>
            </vs-tooltip>
          </div>
        </div>
      </vs-col>
      <!--поиск професии-->
      <vs-col
        vs-type="flex"
        vs-justify="center"
        vs-align="center"
        w="9"
      >
        <div class="center content-inputs inprof">
          <vs-input v-model="value" placeholder="Введите профессию" />
        </div>
        <vs-row align="center" justify="center">
          <vs-col v-for="(item, index) in profs" :key="index" w="3">
            <div @click="clickProf(index)">
              <card :prof="item" />
            </div>
          </vs-col>
        </vs-row>
      </vs-col>
    </vs-row>
  </div>
</template>
<script>
import Card from '~/components/Card'
export default {
  name: 'Mainpage',
  components: { Card },
  layout: 'main',
  data: () => ({
    profs: [{
      name: 'dscnk',
      direction: 'cnsdm c',
      img_link: '#',
      link: '1'
    }, {
      name: 'sdkjvbc',
      direction: 'dmvjcsbk',
      img_link: '#',
      link: '2'
    }],
    activeTooltip1: false,
    valueMonth: '',
    value1: 67,
    value2: 34,
    value3: 60,
    value: '',
    active: 0,
    colors: [
      {
        color: 'danger',
        value: '1'
      }
    ]
  }),
  methods: {
    clickProf (index) {
      this.$nuxt.$router.push(`/professions/${index}`)
    },
    onChangeValues () {
      this.activeTooltip1 = !this.activeTooltip1
    }
  }
}
</script>

<style scoped>
  h1{
    margin-top: 80px;
    margin-bottom: 13px;
    font-size: 40px;
    margin-left: 383px;
  }

  .Naprav{
    margin-left: 58px;
    margin-top: 40px;
    margin-bottom: 10px;
    font-size: 18px;
  }
  .Btnnp>*{
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 58px;
  }
  .SortSS{
    margin-left: 58px;
  }
  .Dlit{
    font-size: 18px;
    margin-top: 35px;
  }
  .Dlit2{
    font-size: 16px;
    line-height: 120%;
    color: #999999;
    margin-top: -4px;

  }
  .inprof{
    font-size: 50px !important;
    margin-bottom: 35px;
  }

</style>
