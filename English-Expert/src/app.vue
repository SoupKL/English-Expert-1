<template>
  <div id="app">
	<site-header/>
<courses-page/>
	<site-footer/>
<!--    <router-view />-->
    <!-- Контент текущей страницы будет рендериться здесь -->
  </div>
</template>

<script>
import NewsPage from "@/views/NewsPage.vue";
import HeaderClassic from "@/components/header/header-classic.vue";
import SiteFooter from "@/components/common/SiteFooter.vue";
import SiteHeader from "@/components/common/SiteHeader.vue";
import CoursesPage from "@/views/CoursesPage.vue";

export default {
  name: 'App',
  components: {CoursesPage, SiteHeader, SiteFooter, HeaderClassic, NewsPage}
}
</script>

<style>
@import "./assets/font.css";

/* Общие стили для всего приложения */
</style>
