<script setup>
import {ref} from "vue";

const firstBlock  = ref(true);
const secondBlock = ref(true);
const thirdBlock  = ref(true);
const fourthBlock = ref(true);

function allFirstBlock(){
	firstBlock.value  = true
	secondBlock.value = true
	thirdBlock.value  = true
	fourthBlock.value = true
}

function chooseFirstBlock(){
	firstBlock.value  = true
	secondBlock.value = false
	thirdBlock.value  = false
	fourthBlock.value = false
}

function chooseSecondBlock(){
	firstBlock.value  = false
	secondBlock.value = true
	thirdBlock.value  = false
	fourthBlock.value = false
}

function chooseThirdBlock(){
	firstBlock.value  = false
	secondBlock.value = false
	thirdBlock.value  = true
	fourthBlock.value = false
}

document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.menu-toggle');
	const menu = document.querySelector('.menu');

	menuToggle.addEventListener('click', function() {
		menu.classList.toggle('active');
	});
});
//
//
// // Получаем ссылки на каждый блок
//
// A1.addEventListener('click', function() {
// 	window.location.href = '/';
// });
//
// A2.addEventListener('click', function() {
// 	window.location.href = 'course_A2.html';
// });
//
// B1.addEventListener('click', function() {
// 	window.location.href = 'course_B1.html';
// });
//
// B1.addEventListener('click', function() {
// 	window.location.href = 'course_B1.html';
// });
//
// B2.addEventListener('click', function() {
// 	window.location.href = 'course_B2.html';
// });
//
// C1.addEventListener('click', function() {
// 	window.location.href = 'course_C1.html';
// });
//
// C2.addEventListener('click', function() {
// 	window.location.href = 'course_C2.html';
// });
//
// work.addEventListener('click', function() {
// 	window.location.href = 'work.html';
// });
//
// purpose.addEventListener('click', function() {
// 	window.location.href = 'purpose.html';
// });

</script>

<template>
	<!-- HEADER -->

<!--	<div class="up">-->

<!--		<div class="wrapper">-->
<!--			<header>-->
<!--				<div id="logo">-->
<!--					<a href="./main.html"><img src="./src/img/main/logo_white.svg" alt="English Expert Logo"></a>-->
<!--				</div>-->
<!--				<div class="menu-toggle">-->
<!--					<img src="./src/img/main/header_swip_white.svg" alt="Menu Icon">-->
<!--				</div>-->
<!--				<nav class="menu">-->
<!--					<a href="./all_courses.html"><img src="./src/img/main/all_curs.svg">Все курсы</a>-->
<!--					<a href="./all_events.html">Мероприятия</a>-->
<!--					<a href="./about.html">О нас</a>-->
<!--					<a href="#"><img src="./src/img/main/geolocation.svg">Владивосток</a>-->
<!--					<a href="tel:8005553535">8 800 555-35-35</a>-->
<!--					<form action="login.php" method="post">-->
<!--						<a href="./login_registration.html"><img src="./src/img/all_events/person.svg"><input-->
<!--								type="text" id="login" name="loginname"-->
<!--								placeholder="Войти"></a>-->
<!--					</form>-->
<!--				</nav>-->
<!--			</header>-->
<!--		</div>-->
<!--	</div>-->

	<!-- Блок Выборки -->

	<div class="wrapper">

		<section class="courses">

			<h3 class="txt">Все программы обучения</h3>

			<div class="cours">
				<div class="level">
					<p class="txt2">Уровень сложности</p>
					<div class="level0">
						<input type="radio" name="vbr2" value="default" @click = 'allFirstBlock' required checked><p>Все курсы</p>
					</div>
					<div class="level1">
						<input
								type="radio"
								name="vbr2"
								value="novice"
								@click="chooseFirstBlock"
								required>
						<p>Новичок</p>
					</div>
					<div class="level2">
						<input type="radio" name="vbr2" value="user" @click="chooseSecondBlock" required><p>Пользователь</p>
					</div>
					<div class="level3">
						<input type="radio" name="vbr2" value="professional" @click = 'chooseThirdBlock' required><p>Профессионал</p>
					</div>
				</div>

				<!-- Блок карточек -->

				<div class="cards-container">
					<div v-if="firstBlock" class="cards1">
						<div class="card" id="A1" href="/tro">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/A1.svg">
								<h3>Уровень А1</h3>
							</div>
							<p>Идеальный выбор для абсолютных новичков.
								Здесь вы освоите английский язык с нуля,
								начиная с базовых фраз и повседневного
								общения. Разработанный курс включает в
								себя интерактивные упражнения, игры и
								диалоги, чтобы улучшить вашу языковую
								подготовку в увлекательной форме.</p>
						</div>

						<div class="card" id="A2">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/A2.svg">
								<h3>Уровень А2</h3>
							</div>
							<p>Переходите от приветствий к простым разговорам.
								Этот курс поможет вам уверенно выражать свои
								мысли на английском. Освоите навыки неформального
								общения, делая вашу коммуникацию более свободной
								и естественной.</p>
						</div>
					</div>

					<div v-if="secondBlock" class="cards2">
						<div class="card" id="B1">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/B1.svg">
								<h3>Уровень B1</h3>
							</div>
							<p>Преодолейте порог и углубитесь в более
								сложные темы. Здесь вы начнете строить
								фундамент для более сложных языковых
								концепций.</p>
						</div>

						<div class="card" id="B2">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/B2.svg">
								<h3>Уровень B2</h3>
							</div>
							<p>Готовьтесь к приключениям! Этот курс сфокусирован
								на развитии вашего языкового навыка в различных
								сценариях. Научитесь применять знания в реальных
								ситуациях, что сделает ваш языковой опыт более
								полноценным и уверенным.</p>
						</div>
					</div>

					<div v-if="thirdBlock" class="cards3">
						<div class="card" id="C1">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/C1.svg">
								<h3>Уровень C1</h3>
							</div>
							<p>Совершенствуйте свой язык и обретайте уверенность
								в общении на высоком уровне. Курс для тех, кто
								стремится к языковому мастерству.</p>
						</div>

						<div class="card" id="C2">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/C2.svg">
								<h3>Уровень C2</h3>
							</div>
							<p>Здесь вы достигнете вершины своего языкового
								мастерства. Курс для тех, кто стремится к
								безупречной владению английским.</p>
						</div>
					</div>

					<div v-if="fourthBlock" class="cards4">
						<div class="card" id="work">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/work.svg">
								<h3>Для работы</h3>
							</div>
							<p>Углубленный курс английского языка, специально
								разработанный для веб-программистов. Освойте
								профессиональную терминологию, понимание кода
								и коммуникацию с международными командами.</p>
						</div>

						<div class="card" id="purpose">
							<div class="cardtxt">
								<img src="../../src/assets/all_courses/purpose.svg">
								<h3>Знаю цель</h3>
							</div>
							<p>Поможем решить любую задачу и осуществить мечту.
								Подойдет тем кто переезжает, тем кто сдает
								экзамен или для тех кому нужно общаться с
								иностранцами</p>
						</div>
					</div>

				</div>

			</div>

		</section>
	</div>

	<!-- БЛОК ФОРМЫ -->

	<div class="wrapper">

		<div class="rabbit_helper">

			<div class="rh_l">
				<img src="../../src/assets/main/rabbit2.svg" alt="кролик помощник нижний">
			</div>

			<div class="rh_r">
				<form action="#" method="POST">
					<div class="form-group full-width">
						<input type="text" id="name" name="name" placeholder="Ваше имя">
					</div>
					<div class="form-group horizontal">
						<div>
							<input type="phone" id="phone" name="phone" placeholder="Ваш телефон">
						</div>
						<div>
							<input type="email" id="email" name="email" placeholder="Ваш e-mail">
						</div>
					</div>
					<div class="form-group vertical">
						<p>Нажимая на кнопку, я соглашаюсь на обработку персональных данных и с правилами пользования Платформой</p>
						<button type="submit">Отправить</button>
					</div>
				</form>
			</div>

		</div>

	</div>

</template>

<style scoped>
.wrapper {
	width: 100%;
	max-width: 1180px;
	margin: 0 auto;
	padding: 20px;
}

/* HEADER */

.up{
	background-color: #00093C;
}

header, .menu {
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 100%;
}

header a{
	font-family: medium;
	font-size: 14px;
	text-decoration: none;
	color: white;
}

.menu{
	margin-left: 5%;
}

#logo img {
	max-width: 100%;
}

header a img {
	margin-right: 5pt;
	vertical-align: middle;
}

::placeholder {
	color: white;
}

input#login  {
	caret-color: transparent;
	border: none;
	outline: none;
	font-family: medium;
	cursor: pointer;
	background-color:#00093C;
	max-width: 50px;
}

header a:active {
	transform: scale(0.95);
}

/* Адаптив header */

@media (max-width: 1000px) {

	.wrapper{
		width: 100%;
		max-width: 600px;
	}

	header {
		flex-direction: row;
		justify-content: space-between;
		position: relative; /* Добавляем позиционирование для родительского header */
	}

	.menu-toggle {
		display: block; /* Показываем кнопку меню */
		cursor: pointer;
	}

	.menu {
		display: none; /* Скрываем основное меню */
		position: absolute;
		top: calc(100% + 10px); /* Меню будет располагаться под кнопкой с отступом 10px */
		right: 0;
		left: 0;
		background-color: #00093C;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		z-index: 1000;
		text-align: center; /* Центрируем элементы внутри меню */
	}

	.menu a {
		display: block;
		padding: 10px 20px;
		text-decoration: none;
		color: white;
		font-size: 14px;
	}

	.menu a:hover {
		background-color: #f0f0f0;
		color: #00093C;
	}

	.menu input {
		max-width: initial; /* Вернуть изначальную ширину для поля ввода */
	}

	.menu.active {
		display: block; /* Показываем меню при активации */
	}
}

/* Скрытие иконки меню при разрешении больше 900px */
@media (min-width: 1000px) {
	.menu-toggle {
		display: none;
	}
}


/* Блок выборки */

.txt {
	font-family: bold;
	font-size: 2.25rem;
}

.cours{
	display: flex;
	justify-content: space-between;
}

/* Адаптив выборки */

@media (max-width: 1000px) {

	.txt{
		text-align: center;
	}

	.cours{
		flex-direction: column;
		align-items: center;
	}

}

/* Блок Карточек */

.cards-container{
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.cards1, .cards2, .cards3, .cards4{
	display: flex;
	justify-content: space-between;
}

.card{
	width: 26rem;
	border-radius: 20px;
	display: flex;
	flex-direction: column;
	padding: 5%;
	margin: 0 1% 1% 1%;
	transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
	cursor: pointer;
}

.card:hover {
	transform: scale(1.02);
	box-shadow: 0 0 20px  rgba(39, 170, 225, 0.5), 0 0 20px  rgba(247, 148, 29, 0.5);
}

.card:active {
	transform: scale(0.98);
	box-shadow: 10px 10px 20px rgba(39, 170, 225, 0.7), -10px -10px 20px rgba(247, 148, 29, 0.7);
}

.card p{
	font-family: regular;
	color: rgb(79, 79, 79);
	font-size: 0.75rem;
}

#A1{
	background-color: rgb(199, 238, 255);
}

#A2{
	background-color: rgb(255, 206, 148);
}

#B1{
	background-color: rgb(255, 227, 142);
}

#B2{
	background-color: rgb(221, 221, 255);
}

#C1{
	background-color: rgb(184, 239, 207);
}

#C2{
	background-color: rgb(199, 238, 255);
}

#work{
	background-color: rgb(197, 221, 255);
}

#purpose{
	background-color: rgb(255, 233, 168);
}

.txt2 {
	font-weight: bold;
	margin-bottom: 10px;
}

.txt{
	font-family: medium;
	font-size: 1rem;
}

.cardtxt{
	display: flex;
	justify-content: space-between;
	width: 12rem;
}

.cardtxt h3{
	color: rgb(0, 9, 60);
	font-size: 1.13rem;
	font-family: medium;
}

.level0 p, .level1, .level2, .level3{
	display: flex;
}

.level0 p, .level1 p, .level2 p, .level3 p{
	margin-left: 5%;
	font-size: 0.88rem;
	font-family: regular;
}

.level {
	display: flex;
	flex-direction: column;
	gap: 10px;
}

.level > div {
	display: flex;
	align-items: center;
	gap: 10px;
}

.level > div > input[type="radio"] {
	appearance: none;
	width: 20px;
	height: 20px;
	border: 2px solid #333333;
	border-radius: 50%;
	outline: none;
	cursor: pointer;
	position: relative;
}

.level > div > input[type="radio"]:checked {
	background: linear-gradient(to right, rgba(247, 148, 29, 1.00), rgba(39, 170, 225, 1.00));
	border: 2px solid #333333;
}

.level > div > input[type="radio"]:focus {
	box-shadow: 0 0 2px 2px rgba(39, 170, 225, 0.5);
}

.level > div > p {
	margin: 0;
}

/* Адаптив карточек */

@media (max-width: 1000px) {

	.cards1, .cards2, .cards3, .cards4, .cards5{
		flex-direction: column;
		margin-top: 8%;
	}

	.card{
		margin-top: 2%;
		width: 18.75rem;
	}

}

/* БЛОК ФОРМЫ */

.rabbit_helper{
	margin-top: 15%;
	width: 100%;
	border-radius: 20px;
	display: flex;
	background-color: #fff;
	position: relative;
	margin-bottom: -10%;
	z-index: 1;
}

.rh_l, .rh_r{
	padding: 2%;
}

.rh_r{
	width: 27.5rem;
}

form {
	padding: 3%;
}

.form-group {
	margin-bottom: 20px;
}

.form-group.full-width {
	width: 100%;
}

.form-group.horizontal {
	display: flex;
	justify-content: space-between;
	width: 27.5rem;
}

.form-group.horizontal div {
	width: 13.13rem;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="phone"] {
	padding: 8px;
	border: none;
	background-color: #bebebe;
	border-radius: 4px;
	font-size: 0.88rem;
	font-family: regular;
	height: 3.13rem;
}

.form-group input[type="text"]{
	width: 100%;
}

.form-group.vertical {
	display: flex;
	justify-content: space-between;
	width: 27.5rem;
}

.form-group.vertical p {
	margin: 0;
	font-size: 0.63rem;
	width: 13.22rem;
}

.form-group.vertical button {
	font-size: 0.88rem;
	font-family: bold;
	padding: 10px 20px;
	background-color: rgb(247, 148, 29);
	color: #fff;
	border: none;
	border-radius: 10px;
	width: 13.22rem;
}

/* Адаптив формы */

@media (max-width: 1000px) {

	.rabbit_helper {
		margin-top: 15%;
		flex-direction: column;
		align-items: center;
		margin-bottom: 0;
	}

	.rh_l img{
		width: 90%;
	}

	.rh_l, .rh_r {
		width: 100%; /* Делаем элементы шириной 90% */
		padding: 0;
	}

	.rh_r {
		margin-top: 20px; /* Добавляем отступ сверху для формы */
	}

	.form-group.horizontal{
		flex-direction: column;
		width: 105%;
	}

	.form-group.full-width{
		margin-bottom: 0;
	}

	.form-group input[type="email"],
	.form-group input[type="phone"] {
		width: 565px;
		margin-top: 5%;
	}
}

/* FOOTER */

footer {
	display: flex;
	flex-direction: row;
	background-color: rgb(0, 9, 60);
	color: #fff;
	text-align: center;
	padding: 20px;
}

.info_f{
	display: flex;
	justify-content: space-between;
	height: 13.38rem;
	align-items:end;
}

.info_f p{
	font-family: medium;
	font-size: 0.88rem;
}

/* Адаптив footer */

@media (max-width: 1000px) {

	.info_f{
		display: flex;
		justify-content: space-between;
		flex-direction: column;
		align-items:center;
	}

}
</style>
