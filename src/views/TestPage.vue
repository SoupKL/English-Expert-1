<template>
	<div class="wrapper">
		<main>
			<div class="container">
				<div v-if="!showResults" id="quiz-container">
					<div id="questionContainer">
						<div class="question">{{ currentQuestion.question }}</div>
						<form @submit.prevent="nextQuestion">
							<div class="answers">
								<div
										v-for="answer in currentQuestion.answers"
										:key="answer"
										class="answer"
								>
									<div
											class="answer-text"
											:class="{ selected: selectedAnswer === answer }"
											@click="selectAnswer(answer)"
									>
										{{ answer }}
									</div>
								</div>
							</div>
							<div class="progress-button-container">
								<div id="progress">Вопрос {{ questionIndex + 1 }}/{{ questions.length }}</div>
								<button class="button" type="submit">Вперед</button>
							</div>
						</form>
					</div>
				</div>

				<div id="result-container" v-else>
					<h2>Для вашего уровня английского подойдет курс:</h2>
					<div v-for="level in Object.keys(courseDescriptions)" :key="level">
						<div v-if="userLevel === level" class="card" :id="level">
							<div class="cardtxt">
								<img :src="getCourseImage(level)"/>
								<h3>Уровень {{ level }}</h3>
							</div>
							<p>{{ courseDescriptions[level] }}</p>
							<button class="button" @click="router.push(`/course/${level.toLowerCase()}`)">Перейти к курсу</button>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</template>

<script setup>
import {ref, computed} from 'vue'
import router from "@/router/index.js";

const questions = [
	{
		question:      "What is your name?",
		answers:       ["I am fine.", "My name is John.", "I live in London.", "I am a teacher."],
		correctAnswer: "My name is John.",
	},
	{
		question:      "How old are you?",
		answers:       ["I am fine.", "I am 25 years old.", "I live in London.", "I am a teacher."],
		correctAnswer: "I am 25 years old.",
	},
	{
		question:      "Where do you live?",
		answers:       ["I am fine.", "I live in London.", "I am 25 years old.", "I am a teacher."],
		correctAnswer: "I live in London.",
	},
	{
		question:      "What is the color of the sky?",
		answers:       ["Blue", "Red", "Green", "Yellow"],
		correctAnswer: "Blue",
	},
	{
		question:      "What time is it?",
		answers:       ["It's a book.", "It's raining.", "It's 3 o'clock.", "It's on the table."],
		correctAnswer: "It's 3 o'clock.",
	},
	{
		question:      "Can you play the guitar?",
		answers:       ["Yes, I can.", "No, I can't.", "I don't like music.", "It's a beautiful day."],
		correctAnswer: "Yes, I can.",
	},
	{
		question:      "What did you do yesterday?",
		answers:       ["I will go to school.", "I went to the park.", "I am going to the market.", "I have a dog."],
		correctAnswer: "I went to the park.",
	},
	{
		question:      "Which is correct?",
		answers:       ["She cans swim.", "She can swim.", "She can swims.", "She can swimming."],
		correctAnswer: "She can swim.",
	},
	{
		question:      "If it rains, I ___ at home.",
		answers:       ["stay", "stayed", "will stay", "staying"],
		correctAnswer: "will stay",
	},
	{
		question:      "I have lived in this city ___ 10 years.",
		answers:       ["since", "for", "during", "by"],
		correctAnswer: "for",
	},
	{
		question:      "He speaks English very well, ___?",
		answers:       ["isn't he", "doesn't he", "does he", "is he"],
		correctAnswer: "doesn't he",
	},
	{
		question:      "I was ___ surprised to see him at the party.",
		answers:       ["completely", "absolutely", "totally", "all of the above"],
		correctAnswer: "all of the above",
	},
	{
		question:      "She wishes she ___ to the meeting yesterday.",
		answers:       ["goes", "went", "had gone", "going"],
		correctAnswer: "had gone",
	},
	{
		question:      "They ___ their homework before they went out.",
		answers:       ["finished", "have finished", "had finished", "finishes"],
		correctAnswer: "had finished",
	},
	{
		question:      "The more you practice, ___ you get.",
		answers:       ["better", "the better", "best", "the best"],
		correctAnswer: "the better",
	},
	{
		question:      "I regret ___ you that your application has been rejected.",
		answers:       ["to inform", "informing", "inform", "informed"],
		correctAnswer: "to inform",
	},
	{
		question:      "Despite ___ a headache, he managed to finish the project on time.",
		answers:       ["to have", "having", "had", "has"],
		correctAnswer: "having",
	},
	{
		question:      "By the time we arrive, the movie ___ already started.",
		answers:       ["will", "will have", "has", "will has"],
		correctAnswer: "will have",
	},
	{
		question:      "Hardly had I reached the station ___ the train left.",
		answers:       ["than", "when", "then", "as"],
		correctAnswer: "when",
	},
	{
		question:      "No sooner had she finished her speech ___ the audience stood up and applauded.",
		answers:       ["than", "when", "then", "as"],
		correctAnswer: "than",
	},
]

const questionIndex  = ref(0)
const selectedAnswer = ref(null)
const score          = ref(0)
const showResults    = ref(false)
const userLevel      = ref("")

const currentQuestion = computed(() => questions[questionIndex.value])

function selectAnswer(answer) {
	selectedAnswer.value = answer
}

function nextQuestion() {
	if (!selectedAnswer.value) {
		alert("Пожалуйста, выберите ответ.")
		return
	}

	if (selectedAnswer.value === currentQuestion.value.correctAnswer) {
		score.value++
	}

	selectedAnswer.value = null
	questionIndex.value++

	if (questionIndex.value >= questions.length) {
		showResults.value = true
		calculateLevel()
	}
}

function calculateLevel() {
	const s = score.value
	if (s >= 16) {
		userLevel.value = "C2"
	}
	else if (s >= 13) {
		userLevel.value = "C1"
	}
	else if (s >= 10) {
		userLevel.value = "B2"
	}
	else if (s >= 7) {
		userLevel.value = "B1"
	}
	else if (s >= 4) {
		userLevel.value = "A2"
	}
	else {
		userLevel.value = "A1"
	}
}

function getCourseImage(level) {
	return new URL(`/public/all_courses/${level}.svg`, import.meta.url).href
}

const courseDescriptions = {
	A1: "Идеальный выбор для абсолютных новичков. Здесь вы освоите английский язык с нуля, начиная с базовых фраз и повседневного общения.",
	A2: "Переходите от приветствий к простым разговорам. Освоите навыки неформального общения.",
	B1: "Преодолейте порог и углубитесь в более сложные темы. Начнете строить фундамент языка.",
	B2: "Готовьтесь к приключениям! Научитесь применять знания в реальных ситуациях.",
	C1: "Совершенствуйте язык и обретайте уверенность в общении на высоком уровне.",
	C2: "Достигните вершины владения английским. Для стремящихся к безупречности.",
}
</script>

<style scoped>
/* TEST */
#questionContainer {
	padding:          20px;
	border-radius:    5px;
	background-color: #f6f7f9;
	margin-bottom:    20px;
	box-shadow:       0px 2px 32px -3px rgba(167, 167, 167, 0.5);
	text-align:       center;
}

.question {
	font-family:   regular;
	font-size:     1.5rem;
	margin-bottom: 20px;
	color:         rgb(0, 0, 0);
}

.answers {
	display:        flex;
	flex-direction: column;
	align-items:    center;

	.answer {
		margin-bottom: 10px;

		.answer-text {
			font-family:   regular;
			font-size:     0.88rem;
			padding:       10px;
			border-radius: 5px;
			cursor:        pointer;
			width:         11rem;

			&.selected {
				background: linear-gradient(to right, #f7941d, #27aae1);
				color:      white;
			}
		}
	}
}

.progress-button-container {
	display:         flex;
	justify-content: space-between;
	width:           40%;
	margin:          2% auto 0 auto;

	#progress {
		font-family: regular;
		font-size:   1.13rem;
	}

	.button {
		font-family:      medium;
		font-size:        16px;
		background-color: #f7941d;
		color:            white;
		border:           none;
		padding:          10px 20px;
		border-radius:    5px;
		cursor:           pointer;
		text-align:       center;

		&:hover {
			background-color: #27aae1;
		}
	}
}

.button {
	@extend .progress-button-container .button;
}
/* RESULTS */
#result-container {
	display:        flex;
	flex-direction: column;
	align-items:    center;
	width:          100%;
	max-width:      100%;
	margin:         0 auto;
	padding:        20px;


	h2 {
		justify-self: center;
		font-family:  regular;
		font-size:    1.5rem;
	}

	.card {
		padding:          20px;
		border-radius:    5px;
		background-color: #f6f7f9;
		margin-bottom:    20px;
		box-shadow:       0px 2px 32px -3px rgba(167, 167, 167, 0.5);
		text-align:       center;
		width:            90%;
		max-width:        430px;


		&.cardtxt {
			h3 {
				font-family: regular;
				font-size:   1.13rem;
			}
		}

		p {
			font-family: regular;
			color:       rgb(79, 79, 79);
			font-size:   0.75rem;
		}

		.button {
			font-size: 0.88rem;
			font-family: bold;
			padding: 10px 20px;
			background-color: rgb(247, 148, 29);
			color: #fff;
			border: none;
			border-radius: 10px;
			flex: 1;
			min-width: 0;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
	}

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
}

</style>
