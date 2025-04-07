<template>
  <div id="app">
	<header-classic/>
		<router-view />
	<site-footer/>
  </div>
</template>

<script>
import HeaderClassic from "@/components/header/header-classic.vue";
import SiteFooter from "@/components/common/SiteFooter.vue";


export default {
  name: 'App',
  components: { SiteFooter, HeaderClassic}
}
</script>

<style>
@import "./assets/font.css";
body{
  margin: 0;
  padding: 0;
  overflow-x:hidden
}

.wrapper {
  width:     100%;
  max-width: 1180px;
  margin:    0 auto;
  padding:   20px;
}

/* Общие стили для всего приложения */
</style>
