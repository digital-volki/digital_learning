<template>
  <vs-card class="kartonka" type="2">
    <template #title>
      <h3>{{ prof.name }}</h3>
    </template>
    <template #img>
      <img class="ImgBackgr" src="img/bcgr.svg" alt="">
    </template>
    <template #text>
      <p>
        {{ prof.direction }}
      </p>
    </template>
  </vs-card>
</template>

<script>
export default {
  name: 'Card',
  props: {
    prof: Object
  }
}
</script>

<style scoped>
  .kartonka{
    width: 250px;
    margin-left: 0px;
    margin-top: 20px;
  }
</style>
