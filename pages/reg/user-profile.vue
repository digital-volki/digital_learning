<template>
  <div class="userprof">
    <div class="avatar">
      <div class="center con-avatars">
        <vs-avatar size="110">
          <img src="/img/Avatarimg.svg" alt="">
        </vs-avatar>

        <div class="flchoice">
          <div class="d-flex flex-wrap makechoise">
            <div class="name-user">
              Никита Аникин
            </div>
          </div>
        </div>
        <div class="stick"></div>
        <img class="zvanieimg" src="/img/wizard.svg" alt="">
        <div class="zvanie">Провидец</div>
        <div class="znanie">
          <img src="/img/crowns.png" alt="">
          <div class="krowns">Знания (120)</div>
        </div>
        <!--рейт-->
        <div class="rating">
          <img src="/img/Vector.svg" alt="">
          <div class="rep-point">Репутация (64)</div>
        </div>

        <div class="rating-po-rep">
          <div class="prp">Рейтинг по репутации</div>
          <div class="stick2"></div>
        </div>

        <div class="rating-po-znan">
          <div class="rpz">Рейтинг по знаниям</div>
          <div class="stick3"></div>
        </div>
      </div>
    </div>
    <div class="active">Активность за последний год</div>
    <div class="table">
      <img src="/img/avatar44.svg" alt="">
    </div>

    <div class="table2">
      <img src="/img/avatar5.svg" alt="">
    </div>
  </div>
</template>

<script>
export default {
  layout: 'main',
  name: 'UserProfile'
}
</script>

<style lang="scss">
@import "assets/scss/bootstrap";

.userprof {
  margin-top: 40px;
  overflow: hidden;
  width: 1100px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 10px;
  box-shadow: 0.1px 2px 2px 1px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);
}

.avatar {
  border-radius: 10px;
  margin-left: 35px;
  margin-top: 35px;
}

.name-user {
  margin: -100px 0px 100px 130px;
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 37px;
  color: #2C2C2C;
}

.stick {
  border: 2px solid #999999;
  color: #999999;
  background: #999999;
  width: 930px;
  margin: -42px 0px 0px 130px;
}

.zvanieimg {
  margin: -55px 0px 55px 130px;

}

.zvanie {
  margin: -79px 0px 79px 170px;
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 21px;
}

.krowns {
  margin-right: 20px;
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  /* identical to box height */
  color: #FFD23B;
  margin: -20px 0px 20px 50px;
}

.znanie {
  margin: -152px 0px 152px 585px;
}

.rating {
  margin: -185px 0px 185px 800px;
}

.rep-point {
  argin-right: 20px;
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  /* identical to box height */
  color: #FFD23B;
  margin: -20px 0px 20px 50px;
}

.stick2 {
  height: 2px;
  color: #7E72F2;
  background: #7E72F2;
  width: 166px;
}

.stick3 {
  height: 2.5px;
  color: #7E72F2;
  background: #7E72F2;
  width: 152px;
}

.rating-po-rep {
  color: #7E72F2;
  margin: -182px 0px 182px 805px;
}

.rating-po-znan {
  color: #7E72F2;
  margin: -209px 0px 209px 590px;
}

.active {
  font-weight: 500;
  font-size: 32px;
  line-height: 28px;
  margin: -130px 0px 0px 20px;
}

.table {
  margin-top: 20px;
  margin-left: 13px;
}

.table2 {
  margin-left: 17px;
}
</style>
