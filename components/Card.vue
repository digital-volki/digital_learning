<template>
  <vs-card class="kartonka" type="2">
    <template #title>
      <h3>Pot with a plant</h3>
    </template>
    <template #img>
      <img class="ImgBackgr" src="img/bcgr.svg" alt="">
    </template>
    <template #text>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      </p>
    </template>
  </vs-card>
</template>

<script>
export default {
  name: 'Card'
}
</script>

<style scoped>
  .kartonka{
    width: 250px;
    margin-left: 0px;
    margin-top: 20px;
  }
</style>
