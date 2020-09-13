<template>
  <div class="YesS" :style="[ tableview?{ width: '1200px'}:{} ]">
    <div class="GoTest">
      <div class="textqv">
        {{ questions[answers.length].str }}
      </div>
    </div>
    <div class="progress">
      <div
        class="progress-bar"
        role="progressbar"
        :style="{width: (answers.length * 100 / (questions.length-1)).toString() + '%'}"
        aria-valuenow="0"
        aria-valuemin="0"
        aria-valuemax="100"
      />
    </div>
    <div class="nbquest">
      {{ answers.length }}/{{ questions.length - 1 }} вопросов
    </div>
    <div v-if="tableview">
      <table class="table tv">
        <thead>
          <tr>
            <th scope="col">
              Система
            </th>
            <th scope="col">
              Уровень соответствия
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="(item, index) in tableData"
            :key="index"
          >
            <td>{{ item.name }}</td>
            <td>
              <div class="progress">
                <div
                  class="progress-bar bg-success"
                  role="progressbar"
                  :style="{ width: item.percent}"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                />
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flchoice">
      <div class="d-flex flex-wrap makechoise">
        <vs-button
          v-for="(item, index) in questions[answers.length].answers"
          :key="index"
          square
          border
          :active="active == index"
          @click="active = index"
        >
          <i class="bx bxs-heart" /> {{ item }}
        </vs-button>
      </div>
    </div>
    <div class="btntest">
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="5" class="Dalee">
          <vs-button
            color="#7E72F2"
            @click="addAnswer"
          >
            <div class="GoTestBtn">
              Далее
            </div>
          </vs-button>
        </vs-col>
      </vs-row>
    </div>
    <div class="whtbg" />
  </div>
</template>

<script>
export default {
  name: 'Quiz',
  data: () => ({
    tableData: [{
      name: 'Человек-природа',
      percent: '57%'
    },
    {
      name: 'Человек-техника',
      percent: '3%'
    },
    {
      name: 'Человек-человек',
      percent: '59%'
    },
    {
      name: 'Человек-знаковая система',
      percent: '9%'
    },
    {
      name: 'Человек-художественный образ',
      percent: '22%'
    }],
    tableview: false,
    active: -1,
    answers: [],
    questions: [
      {
        str: 'Если бы на свете существовали только эти профессии, какую работу вы бы предпочли?',
        answers: ['Помогать больным людям',
          'Чинить машины',
          'Учить младшекласников',
          'Убираться',
          'Составлять таблицы, схемы вычислительных машин']
      },
      {
        str: 'Второй вопрос:',
        answers: ['хммм',
          'или нет',
          'долго?',
          'не думай']
      },
      {
        str: 'Отлично! Теперь давай посмотрим то что походит тебе',
        answers: []
      }
    ]
  }),
  methods: {
    addAnswer () {
      if ((this.answers.length / (this.questions.length - 1)) >= 1) {
        if (this.tableview === false) {
          this.tableview = true
        } else {
          this.$nuxt.$router.push('/mainpage')
        }
      } else {
        this.answers.push(this.active)
        this.active = null
      }
    }
  }
}
</script>

<style lang="scss">
@import "assets/scss/bootstrap";

.tv {
  padding: 5px;
  margin: 25px;
  font-size: 22px;
}

.YesS {
  font-size: 5px;
  margin-top: 140px;
  overflow: hidden;
  width: 850px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 10px;
  box-shadow: 0.1px 2px 2px 1px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);
}

.GoTest {
  padding-top: 17px;
  padding-bottom: 13px;
  background: #7E72F2;
  width: 100%;
  color: #F5F5F5;
  font-size: 19px;
}

.textqv {
  margin: 10px 0px 10px 32px;
}

.TestImg {
  margin-left: 25%;
  margin-top: 30px;
}

.unknowprofession {
  text-align: center;
  font-size: 24px;
  line-height: 28px;
}

.btntest > * > * > * {
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  margin-left: auto;
  margin-top: 20px;
  margin-bottom: -25px;
  margin-right: 15px;
}

.whtbg {
  padding-top: 23px;
  padding-bottom: 21px;
  text-align: center;
  width: 100%;
  color: #F5F5F5;
  font-size: 24px;
}

.progress {
  width: 773px;
  margin-right: auto;
  margin-left: auto;
  margin-top: 15px;
  height: 4px;
}

.nbquest {
  font-size: 15px;
  margin-left: 38px;
  margin-top: 5px;
  color: #2C2C2C;
}

.flchoice {
  font-size: 50px;
  color: orangered;
  margin-left: 36px;
}

.GoTestBtn {
  margin: 7px 30px 7px 30px;
}
</style>
