<template>
  <div>
    <Header />
    <div class="main-container">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
      <Nuxt />
    </div>
  </div>
</template>

<script>
import Header from '@/components/Header'
export default {
  name: 'Prof',
  components: { Header }
}
</script>

<style scoped>
*{
  font-family: 'Ubuntu',serif;
}

.main-container {
  width: 70%;
  margin-left: auto;
  margin-right: auto;
}
</style>
