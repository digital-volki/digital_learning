<template>
  <div>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <Header />
    <Nuxt />
  </div>
</template>

<style>

</style>
<script>
import Header from '~/components/Header'
export default {
  components: { Header }
}
</script>

<style>

  *{
    font-family: 'Ubuntu',serif;
  }
</style>
