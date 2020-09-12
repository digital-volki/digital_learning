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
        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
          25%
        </vs-col>

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
          25%
        </vs-col>

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
          25%
        </vs-col>

        <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3">
          25%
        </vs-col>
      </vs-row>
    </div>
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
  }
  .GoTest{
    padding-top: 23px;
    padding-bottom: 21px;
    text-align: center;
    background: #7E72F2;
    width: 100%;
    color: #F5F5F5;
    font-size: 24px;
  }
  .TestImg{
    margin-left: 25%;
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
</style>
