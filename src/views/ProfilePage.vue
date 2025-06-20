<script setup>
import {ref, onMounted, watch} from 'vue'
import {useUserStore} from '@/stores/userStore'
import CoursesBlock from '@/components/courses-block/courses-block.vue'
import ErrorPage from '@/views/ErrorPage.vue'
import router from "@/router/index.js";
import {useRouter} from "vue-router";

const userStore     = useUserStore()
const activeCourses = ref([])
const hasError      = ref(false)
const loading       = ref(true)
const cursesInfo    = {
	'a1': {level: 'Уровень А1', text: 'Идеальный выбор для абсолютных новичков. Здесь вы освоите английский язык с нуля, начиная с базовых фраз и повседневного общения. Разработанный курс включает в себя интерактивные упражнения, игры и диалоги, чтобы улучшить вашу языковую подготовку в увлекательной форме.'},
	'a2': {level: 'Уровень А2', text: 'Переходите от приветствий к простым разговорам. Этот курс поможет вам уверенно выражать свои мысли на английском. Освоите навыки неформального общения, делая вашу коммуникацию более свободной и естественной.'},
	'b1': {level: 'Уровень B1', text: 'Преодолейте порог и углубитесь в более сложные темы. Здесь вы начнете строить фундамент для более сложных языковых концепций.'},
	'b2': {level: 'Уровень B2', text: 'Готовьтесь к приключениям! Этот курс сфокусирован на развитии вашего языкового навыка в различных сценариях. Научитесь применять знания в реальных ситуациях, что сделает ваш языковой опыт более полноценным и уверенным.'},
	'c1': {level: 'Уровень C1', text: 'Совершенствуйте свой язык и обретайте уверенность в общении на высоком уровне. Курс для тех, кто стремится к языковому мастерству.'},
	'c2': {level: 'Уровень C2', text: 'Здесь вы достигнете вершины своего языкового мастерства. Курс для тех, кто стремится к безупречной владению английским.'},
}

const loadCourses = async () => {
	try {
		const res = await fetch(`https://laravel-api-gmjs.onrender.com/api/users/${userStore.user.id}/course-status`, {
			headers: {
				Authorization: `Bearer ${userStore.token}`,
				Accept:        'application/json',
			},
		})

		if (!res.ok) {
			throw new Error('Ошибка загрузки курсов')
		}

		const data          = await res.json()
		activeCourses.value = Object.entries(data)
				.filter(([_, value]) => value === true)
				.map(([key]) => cursesInfo[key])
				.filter(info => !!info?.level)

	} catch (e) {
		console.error('Ошибка:', e)
		hasError.value = true
	} finally {
		loading.value = false
	}
}

const logout = async () => {
	try {
		await fetch('https://laravel-api-gmjs.onrender.com/api/logout', {
			method:      'POST',
			credentials: 'include', // если используешь Sanctum cookie
			headers:     {
				Accept:        'application/json',
				Authorization: `Bearer ${userStore.token}`, // если токен хранишь явно
			}
		})

		userStore.logout() // обнуляем Pinia/Store/LocalStorage
		router.push('/auth') // переход на экран входа
	} catch (e) {
		console.error('Ошибка при выходе', e)
	}
}

// 👉 Инициализация пользователя и слежение за ним
userStore.initFromStorage()

watch(
		() => userStore.user,
		(user) => {
			if (user) {
				loadCourses()
			}
			else {
				hasError.value = true
				loading.value  = false
			}
		},
		{immediate: true}
)
</script>

<template>
	<div class="wrapper">
		<div class="profile">
			<div class="profile_info">
				<img alt="Аватакрка" class="profile_avatar" src="/main/rabbit.png"/>
				<div class="profile_text-block">
					<div class="profile_name">
						{{ userStore.user?.name }}
					</div>
					<div class="profile_email">
						{{ userStore.user?.login }}
					</div>
				</div>
			</div>

			<div class="profile_courses">
				<div class="profile_courses-text">
					<p>Купленные курсы</p>
				</div>

				<div class="profile_container">
					<div class="profile_box">
						<div v-if="0!==activeCourses.length" class="courses">
							<CoursesBlock
									v-for="(course, index) in activeCourses"
									:key="index"
									:course="course"
							/>
						</div>
						<h1 v-else>
							купленых курсов нет
						</h1>
					</div>
				</div>

				<p v-if="error" class="error">{{ error }}</p>
			</div>
		</div>
		<button @click="logout; " class="logout-button">
			Выйти из аккаунта
		</button>
	</div>

</template>


<style lang="scss" scoped>
$profile-avatar-size:       295px;
$profile-avatar-bg:         #4f4f4f;
$profile-name-font:         "bold";
$profile-email-font:        "bold";
$profile-email-size:        20px;
$profile-email-weight:      700;
$profile-email-line:        24px;
$profile-courses-text-font: "regular";
$profile-courses-text-size: 20px;
$profile-courses-text-line: 100px;

.wrapper {
	max-width: 1200px;
	margin:    0 auto;
	padding:   20px;
}

button{
	margin-top:       1rem;
	padding:          10px 20px;
	font-size:        0.88rem;
	width:            11.94rem;
	height:           3.13rem;
	cursor:           pointer;
	background-color: rgba(247, 148, 29, 1.00);
	color:            white;
	border:           none;
	border-radius:    10px;
	transition:       background-color 0.3s ease;
	align-self:       center;

	&:hover {
		background-color: rgb(218, 120, 0);
	}
}

.courses {
	background:     rgb(221, 223, 230);
	display:        flex;
	flex-direction: column;
	align-items:    center;
	width:          100%;
	max-width:      500px;
	min-height:     380px;
	border-radius:  20px;
	padding:        10px;
	box-sizing:     border-box;
	font-family:    regular;
}

.profile_info {
	display:       flex;
	margin-bottom: 60px;
	flex-wrap:     wrap;
	gap:           20px;

	.profile_avatar {
		width:         $profile-avatar-size;
		height:        $profile-avatar-size;
		background:    $profile-avatar-bg;
		border-radius: 50%;
		object-fit:    cover;
	}

	.profile_text-block {
		align-self: center;
		width:      100%;
		max-width:  500px;

		.profile_name {
			font-weight:   700;
			line-height:   26px;
			font-family:   $profile-name-font;
			text-align:    center;
			margin-bottom: 56px;
		}

		.profile_email {
			font-family: $profile-email-font;
			font-size:   $profile-email-size;
			font-weight: $profile-email-weight;
			line-height: $profile-email-line;
			text-align:  center;
		}
	}
}

.profile_courses-text {
	display:         flex;
	justify-content: center;
	margin-bottom:   20px;

	p {
		color:       rgb(0, 0, 0);
		font-family: $profile-courses-text-font;
		font-size:   $profile-courses-text-size;
		font-weight: 400;
		line-height: $profile-courses-text-line;
		text-align:  center;
	}
}

.profile_container {
	display:         flex;
	justify-content: center;
	max-width:       800px;
	margin:          0 auto;
}

// Media Queries
@media screen and (max-width: 1024px) {
	.profile_info {
		justify-content: center;

		.profile_avatar {
			width:  250px;
			height: 250px;
		}
	}
}

@media screen and (max-width: 768px) {
	.profile_info {
		.profile_avatar {
			width:  200px;
			height: 200px;
		}

		.profile_text-block {
			.profile_name {
				margin-bottom: 30px;
			}
		}
	}

	.profile_courses-text {
		p {
			font-size:   18px;
			line-height: 80px;
		}
	}
}

@media screen and (max-width: 480px) {
	.profile_info {
		.profile_avatar {
			width:  150px;
			height: 150px;
		}

		.profile_text-block {
			.profile_name {
				font-size:     20px;
				margin-bottom: 20px;
			}

			.profile_email {
				font-size: 16px;
			}
		}
	}

	.profile_courses-text {
		p {
			font-size:   16px;
			line-height: 60px;
		}
	}
}
</style>