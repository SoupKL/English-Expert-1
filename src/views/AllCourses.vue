<script setup>
import {ref} from "vue";
import Rabbit from "@/components/rabbit/rabbit.vue";

const firstBlock  = ref(true);
const secondBlock = ref(true);
const thirdBlock  = ref(true);
const fourthBlock = ref(true);

function allFirstBlock() {
	firstBlock.value  = true
	secondBlock.value = true
	thirdBlock.value  = true
	fourthBlock.value = true
}

function chooseFirstBlock() {
	firstBlock.value  = true
	secondBlock.value = false
	thirdBlock.value  = false
	fourthBlock.value = false
}

function chooseSecondBlock() {
	firstBlock.value  = false
	secondBlock.value = true
	thirdBlock.value  = false
	fourthBlock.value = false
}

function chooseThirdBlock() {
	firstBlock.value  = false
	secondBlock.value = false
	thirdBlock.value  = true
	fourthBlock.value = false
}

document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.menu-toggle');
	const menu       = document.querySelector('.menu');

	menuToggle.addEventListener('click', function() {
		menu.classList.toggle('active');
	});
});
</script>

<template>

	<!-- Блок Выборки -->

	<div class="wrapper">

		<section class="courses">

			<h3 class="txt">Все программы обучения</h3>

			<div class="cours">
				<div class="level">
					<p class="txt2">Уровень сложности</p>
					<div class="level0">
						<input type="radio" name="vbr2" value="default" @click='allFirstBlock' required checked>
						<p>Все курсы</p>
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
						<input type="radio" name="vbr2" value="user" @click="chooseSecondBlock" required>
						<p>Пользователь</p>
					</div>
					<div class="level3">
						<input type="radio" name="vbr2" value="professional" @click='chooseThirdBlock' required>
						<p>Профессионал</p>
					</div>
				</div>

				<!-- Блок карточек -->

				<div class="cards-container">
					<div v-if="firstBlock" class="cards1">
						<router-link to="./course/a1" class="card" id="A1">
							<div class="cardtxt">
								<img alt="Человек с книгой" src="../../src/assets/all_courses/A1.svg">
								<h3>Уровень А1</h3>
							</div>
							<p>Идеальный выбор для абсолютных новичков.
								Здесь вы освоите английский язык с нуля,
								начиная с базовых фраз и повседневного
								общения. Разработанный курс включает в
								себя интерактивные упражнения, игры и
								диалоги, чтобы улучшить вашу языковую
								подготовку в увлекательной форме.</p>
						</router-link>

						<router-link to="./course/a2" class="card" id="A2">
							<div class="cardtxt">
								<img alt="Мозг" src="../../src/assets/all_courses/A2.svg">
								<h3>Уровень А2</h3>
							</div>
							<p>Переходите от приветствий к простым разговорам.
								Этот курс поможет вам уверенно выражать свои
								мысли на английском. Освоите навыки неформального
								общения, делая вашу коммуникацию более свободной
								и естественной.</p>
						</router-link>
					</div>

					<div v-if="secondBlock" class="cards2">
						<router-link to="./course/b1" class="card" id="B1">
							<div class="cardtxt">
								<img alt="Книга"  src="../../src/assets/all_courses/B1.svg">
								<h3>Уровень B1</h3>
							</div>
							<p>Преодолейте порог и углубитесь в более
								сложные темы. Здесь вы начнете строить
								фундамент для более сложных языковых
								концепций.</p>
						</router-link>

						<router-link to="./course/b2" class="card" id="B2">
							<div class="cardtxt">
								<img alt="человек с книгой"  src="../../src/assets/all_courses/B2.svg">
								<h3>Уровень B2</h3>
							</div>
							<p>Готовьтесь к приключениям! Этот курс сфокусирован
								на развитии вашего языкового навыка в различных
								сценариях. Научитесь применять знания в реальных
								ситуациях, что сделает ваш языковой опыт более
								полноценным и уверенным.</p>
						</router-link>
					</div>

					<div v-if="thirdBlock" class="cards3">
						<router-link to="./course/c1" class="card" id="C1">
							<div class="cardtxt">
								<img alt="телефон"  src="../../src/assets/all_courses/C1.svg">
								<h3>Уровень C1</h3>
							</div>
							<p>Совершенствуйте свой язык и обретайте уверенность
								в общении на высоком уровне. Курс для тех, кто
								стремится к языковому мастерству.</p>
						</router-link>

						<router-link to="./course/c2" class="card" id="C2">
							<div class="cardtxt">
								<img alt="телефон" src="../../src/assets/all_courses/C2.svg">
								<h3>Уровень C2</h3>
							</div>
							<p>Здесь вы достигнете вершины своего языкового
								мастерства. Курс для тех, кто стремится к
								безупречной владению английским.</p>
						</router-link>
					</div>

					<div v-if="false" class="cards4">
						<div class="card" id="work">
							<div class="cardtxt">
								<img alt="Работа" src="../../src/assets/all_courses/work.svg">
								<h3>Для работы</h3>
							</div>
							<p>Углубленный курс английского языка, специально
								разработанный для веб-программистов. Освойте
								профессиональную терминологию, понимание кода
								и коммуникацию с международными командами.</p>
						</div>

						<div class="card" id="purpose">
							<div class="cardtxt">
								<img alt="зЗная цель" src="../../src/assets/all_courses/purpose.svg">
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
	<rabbit/>

</template>

<style lang="scss" scoped>
$main-radius:           20px;
$main-bg:               #fff;
$main-blue:             rgb(0, 9, 60);
$main-orange:           rgb(247, 148, 29);
$main-shadow:           0 0 20px rgba(39, 170, 225, 0.5), 0 0 20px rgba(247, 148, 29, 0.5);
$main-shadow-active:    10px 10px 20px rgba(39, 170, 225, 0.7), -10px -10px 20px rgba(247, 148, 29, 0.7);
$main-form-bg:          #bebebe;
$main-form-radius:      4px;
$main-form-font:        regular;
$main-form-font-bold:   bold;
$main-form-font-medium: medium;
$main-form-btn-bg:      rgb(247, 148, 29);
$main-form-btn-color:   #fff;

a {
	text-decoration: none;
}

// Скрытие иконки меню при разрешении больше 900px
@media (min-width: 1000px) {
	.menu-toggle {
		display: none;
	}
}

/* Блок выборки */
.txt {
	font-family: bold;
	font-size:   2.25rem;
}

.cours {
	display:         flex;
	justify-content: space-between;

	@media (max-width: 1000px) {
		flex-direction: column;
		align-items:    center;
	}
}

.txt2 {
	font-weight:   bold;
	margin-bottom: 10px;
}

.cards-container {
	display:        flex;
	flex-direction: column;
	gap:            2rem;

	@media (max-width: 1000px) {
		margin-top: 1rem;
		gap:        1rem;
	}
}

.cards1, .cards2, .cards3, .cards4 {
	display:         flex;
	gap:             2rem;
	justify-content: center;

	@media (max-width: 1000px) {
		flex-direction: column;
		align-items:    center;
		gap:            1rem;
	}
}

.card {
	width:          26rem;
	border-radius:  $main-radius;
	display:        flex;
	flex-direction: column;
	padding:        5%;
	transition:     transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
	cursor:         pointer;

	&:hover {
		transform:  scale(1.02);
		box-shadow: $main-shadow;
	}

	&:active {
		transform:  scale(0.98);
		box-shadow: $main-shadow-active;
	}

	p {
		font-family: $main-form-font;
		color:       rgb(79, 79, 79);
		font-size:   0.75rem;
	}

	@media (max-width: 1000px) {
		width: 18.75rem;
	}
}

// Индивидуальные цвета для карточек-уровней
#A1 {
	background-color: rgb(199, 238, 255);
}

#A2 {
	background-color: rgb(255, 206, 148);
}

#B1 {
	background-color: rgb(255, 227, 142);
}

#B2 {
	background-color: rgb(221, 221, 255);
}

#C1 {
	background-color: rgb(184, 239, 207);
}

#C2 {
	background-color: rgb(199, 238, 255);
}

#work {
	background-color: rgb(197, 221, 255);
}

#purpose {
	background-color: rgb(255, 233, 168);
}

.cardtxt {
	display:         flex;
	justify-content: space-between;
	width:           12rem;

	h3 {
		color:       $main-blue;
		font-size:   1.13rem;
		font-family: $main-form-font-medium;
	}
}

.level {
	display:        flex;
	flex-direction: column;
	gap:            10px;

	> div {
		display:     flex;
		align-items: center;
		gap:         10px;

		> input[type="radio"] {
			appearance:    none;
			width:         20px;
			height:        20px;
			border:        2px solid #333;
			border-radius: 50%;
			outline:       none;
			cursor:        pointer;
			position:      relative;

			&:checked {
				background: linear-gradient(to right, $main-orange, rgba(39, 170, 225, 1.00));
				border:     2px solid #333;
			}

			&:focus {
				box-shadow: 0 0 2px 2px rgba(39, 170, 225, 0.5);
			}
		}

		> p {
			margin:      0;
			margin-left: 5%;
			font-size:   0.88rem;
			font-family: $main-form-font;
		}
	}
}

/* БЛОК ФОРМЫ */
.rabbit_helper {
	margin-top:       15%;
	width:            100%;
	border-radius:    $main-radius;
	display:          flex;
	background-color: $main-bg;
	position:         relative;
	margin-bottom:    -10%;
	z-index:          1;

	.rh_l, .rh_r {
		padding: 2%;
	}

	.rh_r {
		width: 27.5rem;
	}

	form {
		padding: 3%;
	}

	.form-group {
		margin-bottom: 20px;

		&.full-width {
			width: 100%;
		}

		&.horizontal {
			display:         flex;
			justify-content: space-between;
			width:           27.5rem;

			div {
				width: 13.13rem;
			}
		}

		&.vertical {
			display:         flex;
			justify-content: space-between;
			width:           27.5rem;

			p {
				margin:    0;
				font-size: 0.63rem;
				width:     13.22rem;
			}

			button {
				font-size:        0.88rem;
				font-family:      $main-form-font-bold;
				padding:          10px 20px;
				background-color: $main-form-btn-bg;
				color:            $main-form-btn-color;
				border:           none;
				border-radius:    10px;
				width:            13.22rem;
			}
		}

		input[type="text"],
		input[type="email"],
		input[type="phone"] {
			padding:          8px;
			border:           none;
			background-color: $main-form-bg;
			border-radius:    $main-form-radius;
			font-size:        0.88rem;
			font-family:      $main-form-font;
			height:           3.13rem;
			width:            100%;
		}
	}

	@media (max-width: 1000px) {
		margin-top:     15%;
		flex-direction: column;
		align-items:    center;
		margin-bottom:  0;

		.rh_l img {
			width: 90%;
		}

		.rh_l, .rh_r {
			width:   100%;
			padding: 0;
		}

		.rh_r {
			margin-top: 20px;
		}

		.form-group.horizontal {
			flex-direction: column;
			width:          105%;
		}

		.form-group.full-width {
			margin-bottom: 0;
		}

		.form-group input[type="email"],
		.form-group input[type="phone"] {
			width:      565px;
			margin-top: 5%;
		}
	}
}

/* FOOTER */
footer {
	display:          flex;
	flex-direction:   row;
	background-color: $main-blue;
	color:            $main-form-btn-color;
	text-align:       center;
	padding:          20px;

	.info_f {
		display:         flex;
		justify-content: space-between;
		height:          13.38rem;
		align-items:     end;

		p {
			font-family: $main-form-font-medium;
			font-size:   0.88rem;
		}

		@media (max-width: 1000px) {
			flex-direction: column;
			align-items:    center;
		}
	}
}
</style>
