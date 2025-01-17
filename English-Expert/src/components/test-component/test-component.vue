<script>
import {ref, computed, onMounted} from 'vue';

export default {
	setup() {
		const questions = ref([
						{
							question:      "What is your name?",
							answers:       ["I am fine.", "My name is John.", "I live in London.", "I am a teacher."
							],
							correctAnswer: "My name is John."
						},
						{
							question:      "How old are you?",
							answers:       ["I am fine.", "I am 25 years old.", "I live in London.", "I am a teacher."
							],
							correctAnswer: "I am 25 years old."
						},
						{
							question:      "Where do you live?",
							answers:       ["I am fine.", "I live in London.", "I am 25 years old.", "I am a teacher."
							],
							correctAnswer: "I live in London."
						},
						{
							question:      "What is the color of the sky?",
							answers:       ["Blue", "Red", "Green", "Yellow"
							],
							correctAnswer: "Blue"
						},
						{
							question:      "What time is it?",
							answers:       ["It's a book.", "It's raining.", "It's 3 o'clock.", "It's on the table."
							],
							correctAnswer: "It's 3 o'clock."
						},
						{
							question:      "Can you play the guitar?",
							answers:       ["Yes, I can.", "No, I can't.", "I don't like music.", "It's a beautiful day."
							],
							correctAnswer: "Yes, I can."
						},
						{
							question:      "What did you do yesterday?",
							answers:       ["I will go to school.", "I went to the park.", "I am going to the market.", "I have a dog."
							],
							correctAnswer: "I went to the park."
						},
						{
							question:      "Which is correct?",
							answers:       ["She cans swim.", "She can swim.", "She can swims.", "She can swimming."
							],
							correctAnswer: "She can swim."
						},
						{
							question:      "If it rains, I ___ at home.",
							answers:       ["stay", "stayed", "will stay", "staying"
							],
							correctAnswer: "will stay"
						},
						{
							question:      "I have lived in this city ___ 10 years.",
							answers:       ["since", "for", "during", "by"
							],
							correctAnswer: "for"
						},
						{
							question:      "He speaks English very well, ___?",
							answers:       ["isn't he", "doesn't he", "does he", "is he"
							],
							correctAnswer: "doesn't he"
						},
						{
							question:      "I was ___ surprised to see him at the party.",
							answers:       ["completely", "absolutely", "totally", "all of the above"
							],
							correctAnswer: "all of the above"
						},
						{
							question:      "She wishes she ___ to the meeting yesterday.",
							answers:       ["goes", "went", "had gone", "going"
							],
							correctAnswer: "had gone"
						},
						{
							question:      "They ___ their homework before they went out.",
							answers:       ["finished", "have finished", "had finished", "finishes"
							],
							correctAnswer: "had finished"
						},
						{
							question:      "The more you practice, ___ you get.",
							answers:       ["better", "the better", "best", "the best"
							],
							correctAnswer: "the better"
						},
						{
							question:      "I regret ___ you that your application has been rejected.",
							answers:       ["to inform", "informing", "inform", "informed"
							],
							correctAnswer: "to inform"
						},
						{
							question:      "Despite ___ a headache, he managed to finish the project on time.",
							answers:       [
								"to have", "having", "had", "has"
							],
							correctAnswer: "having"
						},
						{
							question:      "By the time we arrive, the movie ___ already started.",
							answers:       [
								"will", "will have", "has", "will has"
							],
							correctAnswer: "will have"
						},
						{
							question:      "Hardly had I reached the station ___ the train left.",
							answers:       [
								"than",
								"when",
								"then",
								"as"
							],
							correctAnswer: "when"
						}, {
							question: "No sooner had she finished her speech ___ the audience stood up and applauded.",
							answers:  ["than", "when", "then", "as"],
							correctAnswer:
												"than"
						}
						// Добавьте другие вопросы здесь
					])
		;

		const currentQuestionIndex = ref(0);
		const score                = ref(0);
		const selectedAnswer       = ref(null);
		const questionNumber       = ref(1)

		const currentQuestion = computed(() => questions.value[currentQuestionIndex.value]);
		const progressText    = computed(() => `Вопрос ${currentQuestionIndex.value + 1}/${questions.value.length}`);

		function selectAnswer(answer) {
			selectedAnswer.value = answer;
		}

		function loadNextQuestion() {
			if (selectedAnswer.value) {
				if (selectedAnswer.value === currentQuestion.value.correctAnswer) {
					score.value++;
				}
				selectedAnswer.value = null;

				if (currentQuestionIndex.value < questions.value.length - 1) {
					currentQuestionIndex.value++;
				}
				else {
					showResult();
				}
			}
			else {
				alert('Пожалуйста, выберите ответ.');
			}
		}

		function showResult() {
			let level;
			if (score.value >= 16) {
				level = "C2";
			}
			else if (score.value >= 13) {
				level = "C1";
			}
			else if (score.value >= 10) {
				level = "B2";
			}
			else if (score.value >= 7) {
				level = "B1";
			}
			else if (score.value >= 4) {
				level = "A2";
			}
			else {
				level = "A1";
			}

			console.log(`Score: ${score.value}, Level: ${level}`);
		}

		return {
			currentQuestion,
			progressText,
			selectAnswer,
			loadNextQuestion,
			selectedAnswer,
			questionNumber,
			questions,
			score
		};
	}
}
;

</script>
<template>
	<!-- Блок Теста -->

	<main class="wrapper">
		<div class="container">
			<div id="quiz-container">
				<div id="questionContainer">
					<div class="question">{{currentQuestion.question}}</div>
					<form id="answerForm">
						<div class="answers" id="answersContainer">

						</div>
						<div class="progress-button-container">
							<div id="progress">{{ progressText }}</div>
							<button type="submit" class="button" @click="loadNextQuestion"><i class="fa fa-arrow-right"></i> Вперед</button>
						</div>
					</form>
				</div>
			</div>
			<div id="result-container" class="hide">
				<h2>Для вашего уровня английского подойдет курс:</h2>

				<div class="card hide" id="A1">
					<div class="cardtxt">
						<img src="../../assets/all_courses/A1.svg">
						<h3>Уровень А1</h3>
					</div>
					<p>Идеальный выбор для абсолютных новичков.
						Здесь вы освоите английский язык с нуля,
						начиная с базовых фраз и повседневного
						общения. Разработанный курс включает в
						себя интерактивные упражнения, игры и
						диалоги, чтобы улучшить вашу языковую
						подготовку в увлекательной форме.</p>
					<button id="buttonA1" class="button">Перейти к курсу</button>
				</div>

				<div class="card hide" id="A2">
					<div class="cardtxt">
						<img src="../../assets/all_courses/A2.svg">
						<h3>Уровень А2</h3>
					</div>
					<p>Переходите от приветствий к простым разговорам.
						Этот курс поможет вам уверенно выражать свои
						мысли на английском. Освоите навыки неформального
						общения, делая вашу коммуникацию более свободной
						и естественной.</p>
					<button id="buttonA2" class="button">Перейти к курсу</button>
				</div>
			</div>

			<div class="card hide" id="B1">
				<div class="cardtxt">
					<img src="../../assets/all_courses/B1.svg">
					<h3>Уровень B1</h3>
				</div>
				<p>Преодолейте порог и углубитесь в более
					сложные темы. Здесь вы начнете строить
					фундамент для более сложных языковых
					концепций.</p>
				<button id="buttonB1" class="button">Перейти к курсу</button>
			</div>
		</div>

		<div class="card hide" id="B2">
			<div class="cardtxt">
				<img src="../../assets/all_courses/B2.svg">
				<h3>Уровень B2</h3>
			</div>
			<p>Готовьтесь к приключениям! Этот курс сфокусирован
				на развитии вашего языкового навыка в различных
				сценариях. Научитесь применять знания в реальных
				ситуациях, что сделает ваш языковой опыт более
				полноценным и уверенным.</p>
			<button id="buttonB2" class="button">Перейти к курсу</button>
		</div>
		<!--		</div>-->

		<div class="card hide" id="C1">
			<div class="cardtxt">
				<img src="../../assets/all_courses/C1.svg">
				<h3>Уровень C1</h3>
			</div>
			<p>Совершенствуйте свой язык и обретайте уверенность
				в общении на высоком уровне. Курс для тех, кто
				стремится к языковому мастерству.</p>
			<button id="buttonC1" class="button">Перейти к курсу</button>
		</div>
		<!--		</div>-->

		<div class="card hide" id="C2">
			<div class="cardtxt">
				<img src="../../assets/all_courses/C2.svg">
				<h3>Уровень C2</h3>
			</div>
			<p>Здесь вы достигнете вершины своего языкового
				мастерства. Курс для тех, кто стремится к
				безупречной владению английским.</p>
			<button id="buttonC2" class="button">Перейти к курсу</button>
		</div>
		<!--		</div>-->
		<!--		</div>-->
		<!--		</div>-->
	</main>

	<!--	<script src="./src/js/test.js"></script>-->

	<.>

</template>

<style>
/* Блок теста*/

#questionContainer {
	padding: 20px;
	border-radius: 5px;
	background-color: #F6F7F9;
	margin-bottom: 20px;
	-webkit-box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	-moz-box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	text-align: center;
}

.question {
	font-family: regular;
	font-size: 1.5rem;
	margin-bottom: 20px;
	color: rgb(0, 0, 0);
}

.answers .answer {
	margin-bottom: 10px;
}

.answers{
	align-items: center;
	display: flex;
	flex-direction: column;
}

.answer-text {
	font-family: regular;
	font-size: 0.88rem;
	padding: 10px;
	border-radius: 5px;
	cursor: pointer;
	width: 11rem;
}

.answer-text.selected {
	background: linear-gradient(to right, #F7941D, #27AAE1);
	color: white;
}

.progress-button-container {
	display: flex;
	justify-content: space-between;
	width: 40%;
	margin-top: 2%;
	margin-right: auto;
	margin-left: auto;
}

#progress{
	font-family: regular;
	font-size: 1.13rem;
}

.button {
	font-family: medium;
	font-size: 16px;
	background-color: #F7941D;
	color: white;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
	text-align: center;
}

.button:hover {
	background-color: #27AAE1;
}

.hide {
	display: none;
}

#result-container{
	align-items: center;
	margin-left: auto;
	margin-right: auto;
}

#result-container h2{
	font-family: regular;
	font-size: 1.5rem;
}

.cardtxt h3{
	font-family: regular;
	font-size:1.13rem;
}

.card {
	padding: 20px;
	border-radius: 5px;
	background-color: #F6F7F9;
	margin-bottom: 20px;
	-webkit-box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	-moz-box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	box-shadow: 0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	text-align: center;
	width: 26.89rem;
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

.cardtxt .button {
	margin-top: 20px;
}

</style>
