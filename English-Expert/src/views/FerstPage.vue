<script setup >
import HiBlock from '@/components/hi-block/hi-block.vue';
import Offers from "@/components/offers/offers.vue";
import Teacher from "@/components/ teacher/teacher.vue";

document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.menu-toggle');
	const menu = document.querySelector('.menu');

	menuToggle.addEventListener('click', function() {
		menu.classList.toggle('active');
	});
});

const information = [
  {
    "img": "../../src/assets/about/values1.svg",
    "text": "Содержание обучения должно быть актуальным,\n\t\t\t\t\t\tа методика проверенная годами."
  },
  {
    "img": "../../src/assets/about/values2.svg",
    "text": "Педагог - прежде всего личность компетентная\n\t\t\t\t\t\tи харизматичная."
  },
  {
    "img": "../../src/assets/about/values3.svg",
    "text": "Точка развития образования - ребенок, его интересы\n\t\t\t\t\t\tи потребности"
  },
  {
    "img": "../../src/assets/about/values4.svg",
    "text": "Прогрессом правит любовь к знаниям"
  },
  {
    "img": "../../src/assets/about/values1.svg",
    "text": "Технологии правят миром, а человек эти технологии создает"
  }
]

const teachers = [
  {
    "img":"../../src/assets/cours/comment1.svg",
    "name":"Анна Морозова",
    "text":"Изысканная мотиваторша с глубоким\n" +
        "                    пониманием языка"
  },
  {
    "img":"../../src/assets/cours/comment2.svg",
    "name":"Иван Белов",
    "text":"Энергичный языковед с богатым\n" +
        "                    опытом преподавания"
  },
  {
    "img":"../../src/assets/cours/comment3.svg",
    "name":"Елена Николаева",
    "text":"Терпеливая и креативная педагог,\n" +
        "                    способная адаптироваться к нуждам каждого ученика"
  },
  {
    "img":"../../src/assets/cours/comment4.svg",
    "name":"Дмитрий Ковалев",
    "text":"Заботливый и инновационный учитель,\n" +
        "                    вдохновляющий на достижение лучших результатов"
  }
]

const program = [
  'Предполагают пролонгированное обучение',
    'Составлены с учетом возрастных \n' +
    '                    и индивидуальных особенностей детей',
    'Авторские и не имеют аналогов',
    'Составлены на основе деятельностного\n' +
    '                    и компетентностного подходов',
    'Реализуются с помощью современных\n' +
    '                    педагогических технологий',
    'Актуальны и фундаментальны'

]

</script>

<template>
	<!-- БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА -->

	<section class="hero" id="education">
	</section>


	<!-- БЛОК ПРИВЕТСВИЯ -->

	<div class="wrapper">

		<hi-block/>

	</div>

	<!-- Блок с основателем -->

	<div class="wrapper">

		<div class="inter">

			<div class="inter_left">
				<img src="../../src/assets/about/man.svg" alt="">
				<h3>Сергей Кузнецов</h3>
				<p>Основатель Школы English Expert</p>
			</div>
			<div class="inter_right">
				<p>"Мой интерес к английскому языку начался с
					желания понимать иностранные фильмы и книги,
					разговаривать с носителями и общаться в
					международной среде. Я не стал профессионалом
					в этом деле, но выработал хорошее чувство языка
					и умение общаться. Идея создать онлайн школу
					английского пришла ко мне в 2020 году, когда
					в период полного локдауна я решил воспроизвести
					свою любовь к изучению языков. Оказалось, что
					для изучения английского сейчас не обязательно
					посещать классы вживую, всё доступно в интернете.
					Младший брат проводил большую часть времени за
					играми на смартфоне. Я показал ему английский
					язык. К декабрю он уже начал свободно общаться",
					- смеётся Сергей Николаевич. Вскоре идея небольшой
					онлайн школы английского превратилась в план
					создания Школы English Expert, где дети смогут
					изучать то, что им нравится, а взрослые смогут
					изменить свою жизнь.</p>
			</div>

		</div>

	</div>

	<!-- Блок наши ценности -->

	<div class="wrapper">

		<div class="values">
			<h1>Наши ценности</h1>

      <offers
          :info='information'
      />
		</div>

	</div>



	<!-- Блок преподавателей -->

	<section class="teachers">
		<div class="wrapper">

			<h3>Наши преподаватели</h3>
      <div class="cards">
			<teacher
        :teachers_info="teachers"
      />
      </div>

		</div>
	</section>

	<!-- Блок наши программы -->

	<div class="wrapper">

		<div class="programs">
			<h1>Наши программы</h1>
			<div class="program">
				<div v-for="info in program" class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>{{info}}</p>
				</div>
			</div>

			<div class="numbers">
				<div class="number">
					<img src="../../src/assets/main/8.svg" alt="">
					<p>Курсов</p>
				</div>
				<div class="number">
					<img src="../../src/assets/main/32.svg" alt="">
					<p>Ведущих преподавателей</p>
				</div>
				<div class="number">
					<img src="../../src/assets/main/14795.svg" alt="">
					<p>Выпускников</p>
				</div>
			</div>
		</div>

		<!-- Блок наши партнеры -->

		<div class="wrapper">

			<div class="partners">
				<h1>Наши партнеры</h1>
				<div class="partner_up">
					<img src="../../src/assets/about/tinkoff.svg" alt="">
					<img src="../../src/assets/about/alpha.svg" alt="">
					<img src="../../src/assets/about/vk.svg" alt="">
					<img src="../../src/assets/about/avito.svg" alt="">
					<img src="../../src/assets/about/yandex.svg" alt="">
					<img src="../../src/assets/about/wildberries.svg" alt="">
				</div>
				<div class="partner_down">
					<img src="../../src/assets/about/mail.svg" alt="">
					<img src="../../src/assets/about/samsung.svg" alt="">
					<img src="../../src/assets/about/rosstel.svg" alt="">
					<img src="../../src/assets/about/leroymerlin.svg" alt="">
					<img src="../../src/assets/about/google.svg" alt="">
					<img src="../../src/assets/about/apiship.svg" alt="">
				</div>
			</div>

		</div>

	</div>

	<!-- FOOTER -->

	<footer>
		<div class="wrapper">
			<div class="info_f">
				<img src="../../src/assets/main/logo_white.svg">
				<p>8 800 555-35-35</p>
				<p>г. Владивосток, ул. Жигура, д. 26</p>
				<p>English_Expert@mail.ru</p>
				<p>© English Expert</p>
			</div>

		</div>
	</footer>
</template>

<style scoped>
body {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.wrapper {
	width: 100%;
	max-width: 1180px;
	margin: 0 auto;
	padding: 20px;
}

/* БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА */

#education {
	display: flex;
	height: 480px;
	width: 100%;
	content: url('../../src/assets/main/education.svg');
}

/* Адаптив блока образовательной платформы */

@media (max-width: 1000px) {

	#education{
		content: url('../../src/assets/about/education_small.svg');
		width: 100%;
		height: auto;
	}

}

/* Блок с основателем */

.inter{
	display: flex;
	justify-content: space-around;
	margin-top: 10%;
}

.inter_left h3{
	font-family: bold;
	font-size: 1.13rem;
}

.inter_left p{
	font-family: medium;
	font-size: 0.88rem;
}

.inter_right{
	width: 44.81rem;
	height: 24.69rem;
}

.inter_right p{
	font-family: regular;
	font-size: 1.13rem;
}

/* Адаптив блок с основателем */

@media (max-width: 1000px) {

	.inter{
		flex-direction: column;
	}

	.inter_left{
		margin-right: auto;
		margin-left: auto;
	}

	.inter_right{
		width: 100%;
	}

	.inter_right p{
		font-size: 1rem;
		text-align: center;
	}
}

/* Блок наши ценности */

.values{
	margin-top: 5%;
}

.values h1{
	font-family: bold;
	font-family: 2.25rem;
}

.cards{
	display: flex;
	justify-content: space-between;
}

.card{
	width: 13.75rem;
	margin-top: 2%;
}

.card p{
	font-family: medium;
	font-size: 1rem;
}

/* адаптив блока наши ценности */

@media (max-width: 1000px) {

	.values{
		margin-top: -15%;
	}

	.cards{
		flex-direction: column;
		height: 50rem;
		align-items: center;
	}

}

/* Блок преподавателей */

.teachers{
	width: 100%;
	height: 37.5rem;
	background-image: url('../../src/assets/cours/teacher_background.svg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin-top: 5%;
}

.teachers h3{
	font-family: bold;
	font-size: 2.25rem;
	text-align: center;
	color: white;
	margin-bottom: 6%;
}

.cards{
	display: flex;
	justify-content: space-between;
}

/* адаптив блока преподавателей */

@media (max-width: 1000px) {

	.teachers{
		display: none;
	}

}

/* Блок наши программы */

.programs{
	margin-top: 8%;
}

.programs h1{
	font-family: bold;
	font-size: 2.25rem;
}

.program{
	display: flex;
	justify-content: space-between;
}

.prog{
	width: 11.25rem;
}

.prog p{
	font-size: 1rem;
	font-family: medium;
}

.numbers{
	display: flex;
	justify-content: space-between;
	margin-top: 5%;
}

.number p{
	font-family: medium;
	font-family: 1.25rem;
}

/* адаптив блока наши программы */

@media (max-width: 1000px) {

	.programs h1{
		text-align: center;
	}

	.program{
		flex-direction: column;
		align-items: center;
	}

	.numbers{
		display: none;
	}
}

/* Блок наши партнеры */

.partners{
	margin-top: 10%;
}

.partners h1{
	font-family: medium;
	font-size: 2.25rem;
}

.partner_up, .partner_down{
	display: flex;
	flex-direction: row;
	justify-content: space-between;
}

/* адаптив блока наши партнеры */

@media (max-width: 1000px) {

	.partners h1{
		text-align: center;
	}

	.partner_up, .partner_down{
		flex-direction: column;
		width: 40%;
		margin-right: auto;
		margin-left: auto;
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

/* Блок наши ценности */

.values{
  margin-top: 5%;
}

.values h1{
  font-family: bold;
  font-family: 2.25rem;
}

@media (max-width: 1000px) {

  .values{
    margin-top: -15%;
  }
}

</style>
