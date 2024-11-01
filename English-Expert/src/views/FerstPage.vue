<script setup lang="ts">
import HeaderClassic from '@/components/header/header-classic.vue';
import HiBlock from '@/components/hi-block/hi-block.vue';

document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.menu-toggle');
	const menu = document.querySelector('.menu');

	menuToggle.addEventListener('click', function() {
		menu.classList.toggle('active');
	});
});

</script>

<template>
	<div class="wrapper">
		<header-classic/>
	</div>


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
			<div class="cards">

				<div class="card">
					<img src="../../src/assets/about/values1.svg" alt="">
					<p>Содержание обучения должно быть актуальным,
						а методика проверенная годами.</p>
				</div>

				<div class="card">
					<img src="../../src/assets/about/values2.svg" alt="">
					<p>Педагог - прежде всего личность компетентная
						и харизматичная.</p>
				</div>
				<div class="card">
					<img src="../../src/assets/about/values3.svg" alt="">
					<p>Точка развития образования - ребенок, его интересы
						и потребности</p>
				</div>
				<div class="card">
					<img src="../../src/assets/about/values4.svg" alt="">
					<p>Прогрессом правит любовь к знаниям</p>
				</div>
				<div class="card">
					<img src="../../src/assets/about/values5.svg" alt="">
					<p>Технологии правят миром, а человек эти технологии создает</p>
				</div>

			</div>
		</div>

	</div>

	<!-- Блок преподавателей -->

	<section class="teachers">
		<div class="wrapper">

			<h3>Наши преподаватели</h3>

			<div class="cards">
				<div class="card">
					<img src="../../src/assets/cours/comment1.svg" alt="">
					<h3>Анна Морозова</h3>
					<p> Изысканная мотиваторша с глубоким
						пониманием языка</p>
				</div>
				<div class="card">
					<img src="../../src/assets/cours/comment2.svg" alt="">
					<h3>Иван Белов</h3>
					<p>Энергичный языковед с богатым
						опытом преподавания</p>
				</div>
				<div class="card">
					<img src="../../src/assets/cours/comment3.svg" alt="">
					<h3>Елена Николаева</h3>
					<p>Терпеливая и креативная педагог,
						способная адаптироваться к нуждам каждого ученика</p>
				</div>
				<div class="card">
					<img src="../../src/assets/cours/comment4.svg" alt="">
					<h3>Дмитрий Ковалев</h3>
					<p>Заботливый и инновационный учитель,
						вдохновляющий на достижение лучших результатов</p>
				</div>
			</div>

		</div>
	</section>

	<!-- Блок наши программы -->

	<div class="wrapper">

		<div class="programs">
			<h1>Наши программы</h1>
			<div class="program">
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Предполагают пролонгированное обучение</p>
				</div>
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Составлены с учетом возрастных
						и индивидуальных особенностей детей</p>
				</div>
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Авторские и не имеют аналогов</p>
				</div>
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Составлены на основе деятельностного
						и компетентностного подходов</p>
				</div>
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Реализуются с помощью современных
						педагогических технологий</p>
				</div>
				<div class="prog">
					<img src="../../src/assets/about/vector.svg" alt="">
					<p>Актуальны и фундаментальны</p>
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
	/* user-select: none */
}

.hero {
	display: flex;
	height: 480px;
	width: 100%;
	background-image: url('../../src/assets/main/education.svg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

</style>
