<template>
  <div id="app">
    <TheHeader />
    <TheMenu />
    <Home />
    <TheFooter />
  </div>
</template>

<script>
import TheHeader from '@c/TheHeader.vue'
import TheMenu from '@c/TheMenu.vue'
import Home from './views/Home/Home.vue'
import TheFooter from '@c/TheFooter.vue'

export default {
  name: 'App',
  components: {
    TheHeader,
    TheMenu,
    Home,
    TheFooter
  }
}
</script>

<style>
#app {
    background-color: var(--primary-color);
    min-height: 100vh;
}
* {
    margin: 0;
    padding: 0;
}
body {
    height: 100%;
}
</style>
