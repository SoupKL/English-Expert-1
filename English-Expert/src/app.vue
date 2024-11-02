<template>
  <div id="app">
    <ferst-page></ferst-page>
<!--    <router-view />-->
    <!-- Контент текущей страницы будет рендериться здесь -->
  </div>
</template>

<script>
import FerstPage from "@/views/FerstPage.vue";

export default {
  name: 'App',
  components: {FerstPage}
}
</script>

<style>
@import "./assets/font.css";

/* Общие стили для всего приложения */
</style>
