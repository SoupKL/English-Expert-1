<script setup>

import ReviewUser from "@/components/review-user/review-user.vue";
import skils from "@/components/skils/skils.vue";
import router from "@/router/index.js";
import Rabbit from "@/components/rabbit/rabbit.vue";
import BankCard from "@/components/bank-card/bank-card.vue";

document.addEventListener('DOMContentLoaded', () => {
	const slider = document.querySelector('.slider');
	let isDown   = false;
	let startX;
	let scrollLeft;

	slider.addEventListener('mousedown', (e) => {
		isDown = true;
		slider.classList.add('active');
		startX     = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	});

	slider.addEventListener('mouseleave', () => {
		isDown = false;
		slider.classList.remove('active');
	});

	slider.addEventListener('mouseup', () => {
		isDown = false;
		slider.classList.remove('active');
	});

	slider.addEventListener('mousemove', (e) => {
		if (!isDown) {
			return;
		}
		e.preventDefault();
		const x           = e.pageX - slider.offsetLeft;
		const walk        = (x - startX) * 5; //scroll-fast
		slider.scrollLeft = scrollLeft - walk;
	});
});
</script>

<template>
	<!-- БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА -->

	<section class="hero">
		<button @click="router.push('/all-courses')" class="hero__button"><p>Ознакомится со всеми курсами</p></button>
	</section>

	<!-- БЛОК АКТУАЛЬНЫЕ ЗНАНИЯ -->

	<div class="wrapper">
		<section class="stat">
			<h1>Актуальные знания от признанных экспертов рынка<br>
				для новичков и практикующих специалистов.</h1>
			<section class="stats">
				<div class="stat-item">
					<img alt="8" src="../../src/assets/main/8.svg">
					<p>Курсов</p>
				</div>
				<div class="stat-item">
					<img alt="32" src="../../src/assets/main/32.svg">
					<p>Ведущих преподавателей</p>
				</div>
				<div class="stat-item">
					<img alt="14795" src="../../src/assets/main/14795.svg">
					<p>Выпускников</p>
				</div>
			</section>
		</section>
	</div>

	<!-- БЛОК КАРТОЧЕК НОВОСТЕЙ -->

	<div class="wrapper">
		<section class="event">
			<div class="card-info">
				<div class="cardtxt">
					<img src="../../src/assets/main/25.svg" alt="Дата: 25 ноября" class="date-image">
					<div class="info">
						<h1 class="title">День открытых дверей</h1>
						<p class="description">Приглашаем всех желающих на бесплатную экскурсию<br>
							в мир востребованных профессий и полезных навыков</p>
					</div>
				</div>
			</div>

			<div class="event-actions">
				<div class="action-item">
					<div class="action">
						<img alt="test" src="../../src/assets/main/try.svg">
						<h3>Попробуй!</h3>
						<p>Пройдите тест и узнайте свои способности в сфере информационных технологий</p>
					</div>
				</div>

				<div class="action-item">
					<div class="action">
						<img src="../../src/assets/main/geolocation.svg" alt="Местоположение">
						<h3>Как нас найти?</h3>
						<p>Узнайте наше местоположение и подробности о том, как добраться до нас</p>
					</div>

				</div>

				<div @click="router.push('/news')" class="action-item">
					<div class="action">
						<img src="../../src/assets/main/newspaper.svg" alt="Новости">
						<h3>Новости Академии</h3>
					</div>
				</div>
			</div>

		</section>
	</div>

	<!-- БЛОК ОТЗЫВЫ -->

	<section class="testimonials">
		<h2>Отзывы наших студентов</h2>
		<div class="slider">
			<review-user/>
			<!-- Добавьте больше карточек при необходимости -->
		</div>
	</section>

	<!-- БЛОК НАВЫКИ -->

	<div class="wrapper">
		<skils/>
	</div>

	<!-- БЛОК ФОРМЫ -->

	<rabbit/>
</template>

<style lang="scss" scoped>
$main-radius:           20px;
$main-bg:               #fff;
$main-blue:             rgb(0, 9, 60);
$main-orange:           rgb(247, 148, 29);
$main-form-bg:          #bebebe;
$main-form-radius:      4px;
$main-form-font:        regular;
$main-form-font-bold:   bold;
$main-form-font-medium: medium;
$main-form-btn-bg:      rgb(247, 148, 29);
$main-form-btn-color:   #fff;

/* Prevent horizontal scroll */
:root {
	overflow-x: hidden;
	width:      100%;
	position:   relative;
}

h1 {
	font-family: $main-form-font-bold;
}

/* БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА */
.hero {
	display:             flex;
	height:              480px;
	width:               100%;
	max-width:           100vw;
	background-image:    url('../../src/assets/main/education.svg');
	background-size:     cover;
	background-position: center;
	background-repeat:   no-repeat;
	position:            relative;
	overflow:            hidden;

	:hover {
		transform:  scale(1.02);
		box-shadow: 0 0 20px rgba(39, 170, 225, 0.5), 0 0 20px rgba(247, 148, 29, 0.5);
	}

	&__button {
		position:         absolute;
		top:              350px;
		left:             350px;
		font-size:        0.88rem;
		padding:          5px 10px;
		background-color: $main-orange;
		color:            #fff;
		border:           none;
		border-radius:    10px;

		:hover {
			transform:  none;
			box-shadow: none;
		}
	}

	@media (max-width: 1000px) {
		width:               100%;
		height:              900px;
		background-image:    url('../../src/assets/main/background_ms.svg');
		background-size:     cover;
		background-position: center;
		background-repeat:   no-repeat;
	}

	@media (max-width: 430px) {
		margin-left: 9px;
		height:      600px;

		&__button {
			display: none;
		}
	}
}

/* БЛОК АКТУАЛЬНЫЕ ЗНАНИЯ */
.stat {
	width:      100%;
	max-width:  100%;
	overflow:   hidden;
	padding:    0 15px;
	box-sizing: border-box;

	h1 {
		font-family: $main-form-font-bold;
		font-size:   larger;
		text-align:  center;
		margin-top:  10%;
		padding:     0 15px;
		box-sizing:  border-box;
	}

	.stats {
		display:         flex;
		justify-content: space-around;
		padding:         20px;
		margin-top:      5%;
		flex-wrap:       wrap;

		.stat-item {
			text-align:  center;
			font-family: $main-form-font-medium;
			margin:      10px;
		}
	}

	@media (max-width: 1000px) {
		.stats {
			flex-direction: column;
		}
	}

	@media (max-width: 430px) {
		h1 {
			font-size: 1.2rem;
			padding:   0 15px;
		}

		.stats {
			padding: 10px;

			.stat-item {
				margin: 10px 0;

				img {
					width:  60px;
					height: auto;
				}

				p {
					font-size: 0.9rem;
				}
			}
		}
	}
}

/* БЛОК КАРТОЧЕК НОВОСТЕЙ */
.card-info {
	background-color: #f3a563;
	border-radius:    15px;
	height:           10rem;
	width:            100%;
	max-width:        100%;
	display:          flex;
	justify-content:  center;
	align-items:      center;
	box-sizing:       border-box;
	padding:          0 15px;

	.cardtxt {
		display:         flex;
		justify-content: space-around;
		width:           100%;
		max-width:       43.13rem;
		align-items:     center;
		flex-wrap:       wrap;

		.date-image {
			margin-right: 20px;
			width:        100px;
			height:       auto;
		}

		.info {
			text-align:  left;
			line-height: 1.5rem;
			flex:        1;
			min-width:   200px;

			.title {
				font-size:   2.25em;
				font-weight: $main-form-font-medium;
			}

			.description {
				font-size:   1.13em;
				line-height: 1.5;
				font-family: $main-form-font;
			}
		}
	}

	@media (max-width: 430px) {
		height:  auto;
		padding: 20px 15px;

		.cardtxt {
			width:          100%;
			flex-direction: column;
			text-align:     center;

			.date-image {
				margin-right:  0;
				margin-bottom: 15px;
				width:         80px;
			}

			.info {
				text-align: center;

				.title {
					font-size: 1.5em;
				}

				.description {
					font-size: 1em;
				}
			}
		}
	}
}

.event-actions {
	display:         flex;
	flex-direction:  row;
	justify-content: space-between;
	height:          auto;
	margin-top:      3%;
	flex-wrap:       wrap;
	gap:             20px;
	box-sizing:      border-box;

	h3 {
		font-family: $main-form-font-medium;
	}

	p {
		font-family: $main-form-font;
	}

	.action-item {
		width:           calc(33.333% - 20px);
		min-width:       250px;
		display:         flex;
		flex-direction:  column;
		justify-content: space-between;
		align-items:     center;
		text-align:      center;
		border-radius:   1.25rem;
		transition:      transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;

		&:first-child {
			background-color: #ffe38e;
		}

		&:last-child {
			background-color: #b8efcf;
		}

		&:not(:first-child):not(:last-child) {
			background-color: #ddf;
		}

		&:hover {
			transform:  scale(1.02);
			box-shadow: 0 0 20px rgba(39, 170, 225, 0.5), 0 0 20px rgba(247, 148, 29, 0.5);
		}

		.action {
			padding-top: 10%;
			width:       100%;
			box-sizing:  border-box;
		}
	}

	@media (max-width: 430px) {
		flex-direction: column;
		height:         auto;
		gap:            15px;
		padding:        0 15px;

		.action-item {
			width:   100%;
			height:  auto;
			padding: 20px 15px;

			.action {
				padding-top: 5%;

				img {
					width:  40px;
					height: auto;
				}

				h3 {
					font-size: 1.1rem;
					margin:    10px 0;
				}

				p {
					font-size: 0.9rem;
				}
			}
		}
	}
}

/* Адаптив КАРТОЧЕК НОВОСТЕЙ */
@media (max-width: 1000px) {
	.event {
		display:        flex;
		flex-direction: column;
	}
	.card-info {
		min-height:   18rem;
		width:        18.75rem;
		padding:      2%;
		margin-left:  auto;
		margin-right: auto;

		.cardtxt {
			width: 18.75rem;

			.date-image {
				width: 4.5rem;
			}
		}
	}
	.info {
		text-align:  left;
		line-height: 1.5rem;
	}
	.title {
		font-size:   1.44rem;
		font-weight: $main-form-font-medium;
	}
	.description {
		font-size:   1rem;
		line-height: 1.5;
		font-family: $main-form-font;
	}
	.event-actions {
		flex-direction: column;
		margin-right:   auto;
		margin-left:    auto;
		margin-top:     3%;

		h3 {
			font-family: $main-form-font-medium;
			font-size:   1rem;
		}

		p {
			font-family: $main-form-font;
			font-size:   0.8rem;
		}

		.action-item, .action-item1 {
			width:           20rem;
			display:         flex;
			flex-direction:  column;
			justify-content: space-between;
			align-items:     center;
			text-align:      center;
			border-radius:   1.25rem;
			margin-top:      3%;
			padding:         3%;
		}
	}
}

/* БЛОК ОТЗЫВЫ */
.testimonials {
	width:               100%;
	max-width:           100vw;
	height:              auto;
	min-height:          37rem;
	padding:             2em 0;
	background-image:    url('../../src/assets/main/background.svg');
	background-size:     cover;
	background-position: center;
	background-repeat:   no-repeat;
	color:               #fff;
	margin-top:          10%;
	overflow:            hidden;

	h2 {
		font-family: $main-form-font-bold;
		font-size:   2.25rem;
		margin-top:  3.5%;
		text-align:  center;
		padding:     0 15px;
	}

	.slider {
		display:                    flex;
		gap:                        1em;
		overflow-x:                 auto;
		scroll-behavior:            smooth;
		-webkit-overflow-scrolling: touch;
		padding:                    20px 15px;
		width:                      100%;
		box-sizing:                 border-box;
		scrollbar-width:            none;
		-ms-overflow-style:         none;
		user-select:                none;
		cursor:                     grab;

		&:active {
			cursor: grabbing;
		}

		* {
			user-select: none;
		}

		&::-webkit-scrollbar-thumb:hover {
			background: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
		}

		&.active * {
			pointer-events: none;
		}
	}

	.testimonial-item p {
		font-family: $main-form-font-medium;
		font-size:   0.88rem;
	}

	.user-info h2 {
		font-size:   0.88rem;
		font-family: $main-form-font-bold;
	}

	.user-info img {
		border-radius: 50%;
		width:         50px;
		height:        50px;
	}

	.stars img {
		width: 20px;
	}

	@media (max-width: 430px) {
		height:     auto;
		padding:    1em 0;
		margin-top: 5%;

		h2 {
			font-size:  1.5rem;
			margin-top: 2%;
		}

		.slider {
			padding: 10px 15px;
		}
	}
}

/* БЛОК ФОРМЫ */
.rabbit_helper {
	width:            100%;
	max-width:        100%;
	margin-top:       5%;
	margin-bottom:    0;
	border-radius:    20px;
	display:          flex;
	background-color: rgba(0, 9, 60, 0.1);
	position:         relative;
	z-index:          1;
	overflow:         hidden;
	box-sizing:       border-box;
	padding:          0 15px;

	@media (max-width: 430px) {
		display:        flex;
		margin-top:     5%;
		margin-bottom:  0;
		flex-direction: column;
		padding:        0 15px;

		.rh_l {
			display: none;
		}

		.rh_r {
			width:   100%;
			padding: 15px;
		}
	}
}
</style>