<script setup>

import ReviewUser from "@/components/review-user/review-user.vue";
import skils from "@/components/skils/skils.vue";
import router from "@/router/index.js";
import Rabbit from "@/components/rabbit/rabbit.vue";

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
	if (!isDown) return;
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
		  <img src="../../src/assets/main/8.svg">
		  <p>Курсов</p>
		</div>
		<div class="stat-item">
		  <img src="../../src/assets/main/32.svg">
		  <p>Ведущих преподавателей</p>
		</div>
		<div class="stat-item">
		  <img src="../../src/assets/main/14795.svg">
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
			<img src="../../src/assets/main/try.svg">
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

<style scoped>
h1 {
  font-family: bold;
}

/* БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА */

.hero {
  display:             flex;
  height:              480px;
  width:               100%;
  background-image:    url('../../src/assets/main/education.svg');
  background-size:     cover;
  background-position: center;
  background-repeat:   no-repeat;
}

.hero__button {
  position:         absolute;
  top:              450px;
  left:             130px;
  font-size:        0.88rem;
  padding:          5px 10px;
  background-color: rgb(247, 148, 29);
  color:            #fff;
  border:           none;
  border-radius:    10px;
}

/* Адаптив образовательной платформы */

@media (max-width: 1000px) {
  section.hero {
	width:               100%;
	height:              900px;
	background-image:    url('../../src/assets/main/background_ms.svg');
	background-size:     cover;
	background-position: center;
	background-repeat:   no-repeat;
  }
}

/* БЛОК АКТУАЛЬНЫЕ ЗНАНИЯ */

.stat h1 {
  font-family: bold;
  font-size:   larger;
  text-align:  center;
  margin-top:  10%;
}

.stats {
  display:         flex;
  justify-content: space-around;
  padding:         20px;
  margin-top:      5%;
}

.stat-item {
  text-align:  center;
  font-family: medium;
}

/* Адаптив АКТУАЛЬНЫЕ ЗНАНИЯ */

@media (max-width: 1000px) {

  .stats {
	display:         flex;
	flex-direction:  column;
	justify-content: space-around;
	padding:         20px;
	margin-top:      5%;
  }
}

/* БЛОК КАРТОЧЕК НОВОСТЕЙ */

.card-info {
  background-color: #f3a563;
  border-radius:    15px;
  height:           10rem;
  width:            100%;
  display:          flex;
  justify-content:  center;
  align-items:      center;
}

.cardtxt {
  display:         flex;
  justify-content: space-around;
  width:           43.13rem;
  align-items:     center;
}

.date-image {
  margin-right: 20px;
  width:        100px;
  height:       auto;
}

.info {
  text-align:  left;
  line-height: 1.5rem;
}

.title {
  font-size:   2.25em;
  font-weight: medium;
}

.description {
  font-size:   1.13em;
  line-height: 1.5;
  font-family: regular;
}

.event-actions {
  display:         flex;
  flex-direction:  row;
  justify-content: space-between;
  height:          13.75rem;
  margin-top:      3%;
}

.event-actions h3 {
  font-family: medium;
}

.event-actions p {
  font-family: regular;
}


.action-item {
  background-color: #DDDDFF;
}

.action-item:last-child {
  background-color: #B8EFCF;
}

.action-item:first-child {
  background-color: #FFE38E;
}

.action-item {
  width: 20rem;
}

.action-item{
  display:         flex;
  flex-direction:  column;
  justify-content: space-between;
  align-items:     center;
  text-align:      center;
  border-radius:   1.25rem;
}

.action {
  padding-top: 10%;
}

#i1 {
  background-color: #FFE38E;
}

#i2 {
  background-color: #DDDDFF;
}

/* Адаптив КАРТОЧЕК НОВОСТЕЙ */

@media (max-width: 1000px) {

  .event {
	display:        flex;
	flex-direction: column;
  }

  .card-info {
	background-color: #f3a563;
	border-radius:    15px;
	height:           18rem;
	width:            18.75rem;
	padding:          2%;
	margin-left:      auto;
	margin-right:     auto;
  }

  .cardtxt {
	display:         flex;
	justify-content: space-around;
	width:           18.75rem;
	align-items:     center;
  }

  .date-image {
	margin-right: 20px;
	width:        4.5rem;
	height:       auto;
  }

  .info {
	text-align:  left;
	line-height: 1.5rem;
  }

  .title {
	font-size:   1.44rem;
	font-weight: medium;
  }

  .description {
	font-size:   1rem;
	line-height: 1.5;
	font-family: regular;
  }

  .event-actions {
	display:         flex;
	flex-direction:  column;
	justify-content: space-between;
	margin-right:    auto;
	margin-left:     auto;
	margin-top:      3%;
  }

  .event-actions h3 {
	font-family: medium;
	font-size:   1rem;
  }

  .event-actions p {
	font-family: regular;
	font-size:   0.8rem;
  }

  .action-item1 {
	width: 20rem;
  }

  .action-item {
	width: 20rem;

  }

  .action-item, .action-item1 {
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

/* БЛОК ОТЗЫВЫ */

.testimonials {
  width:               100%;
  height:              37rem;;
  padding:             2em 0;
  background-image:    url('../../src/assets/main/background.svg');
  background-size:     cover;
  background-position: center;
  background-repeat:   no-repeat;
  color:               #fff;
  margin-top:          10%;
}

.testimonials h2 {
  font-family: bold;
  font-size:   2.25rem;
  margin-top:  3.5%;
  text-align:  center;
}

.slider {
  display: flex;
  gap: 1em;
  overflow-x: auto;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  padding: 20px 0;
  width: 100%;
  scrollbar-width: none;
  -ms-overflow-style: none;
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  cursor: grab;
}

.slider:active {
  cursor: grabbing;
}

.slider * {
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

.slider::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
}

.slider.active * {
  pointer-events: none;
}

.testimonial-item p {
  font-family: medium;
  font-size:   0.88rem;
}


.user-info h2 {
  font-size:   0.88rem;
  font-family: bold;
}

.user-info img {
  border-radius: 50%;
  width:         50px;
  height:        50px;
}

.stars img {
  width: 20px;
}

/* Адаптив Отзывов*/

@media (max-width: 1000px) {

  .testimonials {
	margin-top: 50%;
  }

}
</style>