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
				<img :src="news.image" alt="News Image"/>

				<div class="txt">
					<p v-for="(paragraph, index) in news.content" :key="index">{{ paragraph }}</p>
				</div>
			</div>
			<div v-else class="wrapper"><p>Новость не найдена.</p></div>
		</div>
	</div>
</template>

<script setup>
import {useRoute} from 'vue-router'
import {computed} from 'vue'
import {newsData} from '@/information/newsData.js'

const route  = useRoute()
const newsId = Number(route.params.id)
const news   = computed(() => newsData.find(item => item.id === newsId))
</script>

<style lang="scss">
// Блок новости
.pagination {
	a {
		text-decoration: none;
		color:           rgb(109, 109, 109);
		font-family:     medium;
		font-size:       0.95rem;
	}
}

.news-title {
	font-family: bold;
	font-size:   2.25rem;
	color:       rgb(0, 0, 0);
}

.news-date {
	font-family: regular;
	font-size:   0.75rem;
	color:       rgb(0, 0, 0);
}

.news-description {
	font-family: regular;
	font-size:   1.13rem;
	color:       rgb(0, 0, 0);
}

.txt {
	font-family: regular;
	font-size:   1.13rem;
	color:       rgb(0, 0, 0);
	line-height: 26px;
}

// Адаптив новости
@media (max-width: 1000px) {
	.news-title {
		font-size: 1.5rem;
	}

	.container img {
		width: 100%;
	}

	.txt {
		font-size: 0.9rem;
	}
}
</style>
