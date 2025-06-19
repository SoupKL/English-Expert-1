<template>
	<div>
		<!-- Контент новости -->
		<div class="wrapper">
			<div class="pagination">
				<RouterLink to="/all-news">← Все новости</RouterLink>
			</div>

			<div class="container" v-if="news">
				<div class="container_txt">
					<h3 class="news-title">{{ news.title }}</h3>
					<span class="news-date">{{ news.date }}</span>
					<p class="news-description">{{ news.description }}</p>
				</div>
				<img :src="news.image" alt="News Image" />

				<div class="txt">
					<p v-for="(paragraph, index) in news.content" :key="index">{{ paragraph }}</p>
				</div>
			</div>
			<div v-else class="wrapper"><p>Новость не найдена.</p></div>
		</div>
	</div>
</template>

<script setup>
import { useRoute } from 'vue-router'
import { computed } from 'vue'
import { newsData } from '@/information/newsData.js'

const route = useRoute()
const newsId = Number(route.params.id)
const news = computed(() => newsData.find(item => item.id === newsId))
</script>

<style scoped ></style>
