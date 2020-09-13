<template>
  <div class="YesS">
    <div class="GoTest">
      <div class="textqv">Если бы на свете существовали только эти профессии, какую работу вы бы предпочли?</div>
    </div>
    <div class="progress">
      <div
        class="progress-bar"
        role="progressbar"
        style="width: 50%"
        aria-valuenow="0"
        aria-valuemin="0"
        aria-valuemax="100"
      />
    </div>
    <div class="nbquest">
      1/2 вопросов
    </div>
    <div class="flchoice">
    <div class="d-flex flex-wrap makechoise">
      <vs-button
        square
        border
        :active="active == 2"
        @click="active = 2"
      >
        <i class="bx bxs-heart"></i> Помогать больным людям
      </vs-button>

      <vs-button
        square
        border
        :active="active == 3"
        @click="active = 3"
      >
        <i class="bx bxs-heart"></i> Чинить машины
      </vs-button>

      <vs-button
        square
        border
        :active="active == 4"
        @click="active = 4"
      >
        <i class="bx bxs-heart"></i> Учить младшеклассников
      </vs-button>

      <vs-button
        square
        border
        :active="active == 5"
        @click="active = 5"
      >
        <i class="bx bxs-heart"></i> Убираться
      </vs-button>

      <vs-button
        square
        border
        :active="active == 6"
        @click="active = 6"
      >
        <i class="bx bxs-heart"></i> Составлять таблицы, схемы вычислительных машин
      </vs-button>
    </div>
    </div>
    <div class="btntest">
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
        </vs-col>

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="5" class="Dalee">
          <vs-button
            color="#7E72F2"
            :active="active == 1"
            @click="active = 1"
          >
            <div class="GoTestBtn">Пройти тест</div>
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
    stats: [],
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
        str: 'Если бы на свете существовали только эти профессии, какую работу вы бы предпочли?',
        answers: ['Помогать больным людям',
          'Чинить машины',
          'Учить младшеклассников',
          'Убираться',
          'Составлять таблицы, схемы вычислительных машин']
      }
    ]
  })
}
</script>

<style lang="scss">
  @import "assets/scss/bootstrap";
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
  .textqv{
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

  .progress{
    width: 773px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 15px;
    height: 4px;
  }
  .nbquest{
    font-size: 15px;
    margin-left: 38px;
    margin-top: 5px;
    color: #2C2C2C;
  }
  .flchoice{
    font-size: 50px;
    color: orangered;
    margin-left: 36px;
  }
  .GoTestBtn{
    margin: 7px 30px 7px 30px;
  }
</style>
