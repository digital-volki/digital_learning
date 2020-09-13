<template>
  <div class="YesS">
    <div class="GoTest">
      Пройти тест
    </div>
    <img class="TestImg" src="/img/TestImg.svg" alt="">
    <div class="unknowprofession">
      Ещё не определился с профессией?
    </div>
    <div class="btntest">
      <vs-row>
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
          <vs-button
            color="#7E72F2"
            border
            :active="active == 0"
            to="/mainpage"
            @click="active = 0"
          >
            Пропустить
          </vs-button>
        </vs-col>

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="1 " />

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="5">
          <vs-button
            color="#7E72F2"
            :active="active == 1"
            to="/reg/quizquestions"
            @click="active = 1"
          >
            Пройти тест
          </vs-button>
        </vs-col>
      </vs-row>
    </div>
    <div class="whtbg" />
  </div>
</template>

<script>
export default {
  name: 'Quiz'
}
</script>

<style scoped>
  .YesS{
    margin-top: 140px;
    overflow: hidden;
    width: 566px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    box-shadow: 0.1px 2px 2px 1px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);
  }
  .GoTest{
    padding-top: 17px;
    padding-bottom: 13px;
    text-align: center;
    background: #7E72F2;
    width: 100%;
    color: #F5F5F5;
    font-size: 24px;
  }
  .TestImg{
    margin-left: 25%;
    margin-top: 30px;
  }
  .unknowprofession{
    text-align: center;
    font-size: 24px;
    line-height: 28px;
  }
  .btntest>*>*>*{
    margin-top: 15px;
    font-weight: 500;
    font-size: 27px;
    line-height: 23px;
    width: auto;
  }
  .whtbg{
    padding-top: 23px;
    padding-bottom: 21px;
    text-align: center;
    width: 100%;
    color: #F5F5F5;
    font-size: 24px;
  }
</style>
