<template>
  <div class="card m-2 border-none">
    <img :src="prof.img_link" class="border-yellow pr-0 m-0 card-img-top" alt="logo">
    <div class="card-img-overlay border-blue">
      <p class="card-text">{{ prof.direction}}</p>
      <h5 class="card-title">{{ prof.name }}</h5>
      <p class="card-subtitles mt-3">{{ prof.link }} месяцев</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card',
  props: {
    prof: Object
  }
}
</script>

<style lang="scss">
  @import "assets/scss/bootstrap";
  .card{
    /*width: 250px;*/
    margin-left: 0px;
    margin-top: 20px;
  }
  h5.card-title{
    font-family: Ubuntu;
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 28px;

    color: #2C2C2C;
  }
  .card-text{
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 18px;

  }
</style>
