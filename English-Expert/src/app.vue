<template>
  <div id="app">
	<header-classic/>
		<router-view />
	<site-footer/>
    <!-- Контент текущей страницы будет рендериться здесь -->
  </div>
</template>

<script>
import NewsPage from "@/views/NewsPage.vue";
import HeaderClassic from "@/components/header/header-classic.vue";
import SiteFooter from "@/components/common/SiteFooter.vue";
import SiteHeader from "@/components/common/SiteHeader.vue";
import CoursesPage from "@/views/CoursesPage.vue";
import BankCard from "@/components/bank-card/bank-card.vue";
import HomeView from "@/views/HomeView.vue";
import MainPage from "@/views/MainPage.vue";


export default {
  name: 'App',
  components: { SiteFooter, HeaderClassic}
}
</script>

<style>
@import "./assets/font.css";

/* Общие стили для всего приложения */
</style>
