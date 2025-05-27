<template>
	<div id="app">
		<header-classic/>
		<router-view/>
		<site-footer/>
		<scroll-to-top/>
	</div>
</template>

<script>
import HeaderClassic from "@/components/header/header-classic.vue";
import SiteFooter from "@/components/common/SiteFooter.vue";
import ScrollToTop from "@/components/ScrollToTop/ScrollToTop.vue";


export default {
	name:       'App',
	components: {SiteFooter, HeaderClassic, ScrollToTop}
}
</script>

<style lang="scss">
@import "./assets/font.css";

html, body {
	margin:     0;
	padding:    0;
	overflow-x: hidden;
	width:      100%;
	position:   relative;
}

#app {
	width:      100%;
	overflow-x: hidden;
	position:   relative;
}

.wrapper {
	width:      100%;
	max-width:  1180px;
	margin:     0 auto;
	padding:    20px;
	box-sizing: border-box;

	@media (max-width: 768px) {
		max-width: 540px;
		padding:   10px;
	}

	@media (max-width: 576px) {
		padding: 8px;
	}
}

/* Общие стили для всего приложения */
</style>
