<script>
import {ref} from 'vue'
import {useUserStore} from '@/stores/userStore'

export default {
	setup() {
		const formLog = ref(false)
		const form    = ref({
			name:                  '',
			login:                 '',
			email:                 '',
			password:              '',
			password_confirmation: '',
		})

		const errors         = ref({})
		const successMessage = ref('')
		const loading        = ref(false)

		const userStore = useUserStore()

		const validateForm = () => {
			errors.value = {}
			let valid    = true

			if (!form.value.name) {
				errors.value.name = 'Имя обязательно'
				valid             = false
			}
			if (!form.value.login) {
				errors.value.login = 'Логин обязателен'
				valid              = false
			}
			if (!form.value.email || !/^[\w-.]+@[\w-]+\.[a-z]{2,}$/i.test(form.value.email)) {
				errors.value.email = 'Введите корректный email'
				valid              = false
			}
			if (!form.value.password || form.value.password.length < 8) {
				errors.value.password = 'Пароль должен быть не менее 8 символов'
				valid                 = false
			}
			if (form.value.password !== form.value.password_confirmation) {
				errors.value.password_confirmation = 'Пароли не совпадают'
				valid                              = false
			}

			return valid
		}

		const registerPost = async () => {
			if (!validateForm()) {
				return
			}

			loading.value        = true
			successMessage.value = ''
			errors.value         = {}

			try {
				const response = await fetch('http://127.0.0.1:8000/api/register', {
					method:  'POST',
					headers: {
						'Content-Type': 'application/json',
						'Accept':       'application/json'
					},
					body:    JSON.stringify(form.value)
				})

				const data = await response.json()

				if (!response.ok) {
					errors.value = data.errors || {message: data.message || 'Ошибка регистрации'}
					return
				}

				userStore.setToken(data.access_token)
				userStore.setUser(data.user)

				successMessage.value = 'Регистрация прошла успешно!'
				// Перенаправление можно делать здесь:
				// router.push('/dashboard')
			} catch (error) {
				errors.value = {message: 'Ошибка сети. Попробуйте позже.'}
			} finally {
				loading.value = false
			}
		}

		return {
			formLog,
			form,
			errors,
			successMessage,
			loading,
			registerPost,
			chooseLogIn:  () => (formLog.value = false),
			chooseLogOut: () => (formLog.value = true),
		}
	}
}

</script>

<template>
	<div class="wrapper">
		<main>
			<div class="container">
				<div class="tab">
					<button class="tablinks" :class="{ active: !formLog }" @click="chooseLogIn()">Вход</button>
					<button class="tablinks" :class="{ active: formLog }" @click="chooseLogOut()">Регистрация</button>
				</div>

				<div v-if="formLog === false" class="tabcontent">
					<form @submit.prevent>
						<input type="text" placeholder="Логин/Email"/>
						<input type="password" placeholder="Пароль"/>
						<button type="submit" class="enter">Войти</button>
					</form>
				</div>

				<div v-if="formLog === true" class="tabcontent">
					<form @submit.prevent="registerPost">
						<input v-model="form.name" type="text" placeholder="Имя"/>
						<span v-if="errors.name" class="error">{{ errors.name }}</span>

						<input v-model="form.login" type="text" placeholder="Логин"/>
						<span v-if="errors.login" class="error">{{ errors.login }}</span>

						<input v-model="form.email" type="email" placeholder="Email"/>
						<span v-if="errors.email" class="error">{{ errors.email }}</span>

						<input v-model="form.password" type="password" placeholder="Пароль"/>
						<span v-if="errors.password" class="error">{{ errors.password }}</span>

						<input v-model="form.password_confirmation" type="password" placeholder="Повторите пароль"/>
						<span v-if="errors.password_confirmation" class="error">{{ errors.password_confirmation }}</span>

						<button type="submit" class="enter" :disabled="loading">
							{{ loading ? 'Отправка...' : 'Зарегистрироваться' }}
						</button>

						<p v-if="errors.message" class="error">{{ errors.message }}</p>
						<p v-if="successMessage" class="success">{{ successMessage }}</p>
					</form>
				</div>
			</div>
		</main>
	</div>
</template>


<style lang="scss" scoped>
$main-bg:               #fff;
$main-radius:           0.38rem;
$main-form-bg:          rgb(221, 223, 230);
$main-form-font:        regular;
$main-form-font-bold:   bold;
$main-form-font-medium: medium;
$main-form-btn-bg:      #f39c12;
$main-form-btn-color:   #fff;
$main-gradient:         linear-gradient(to right, rgba(247, 148, 29, 1.00), rgba(39, 170, 225, 1.00));
$main-black:            #000;
$main-grey:             rgb(79, 79, 79);

body {
	font-family: Arial, sans-serif;
	margin:      0;
	padding:     0;
	box-sizing:  border-box;
}

/*  БЛОК ФОРМЫ ВХОДА/РЕГИСТРАЦИИ */
.container {
	width:            100%;
	max-width:        36.25rem;
	height:           28.5rem;
	margin:           50px auto;
	background-color: $main-bg;
	padding:          20px;
}

.tab {
	display:         flex;
	justify-content: space-around;
	position:        relative;
	margin-bottom:   20px;

	button {
		background-color: inherit;
		border:           none;
		outline:          none;
		cursor:           pointer;
		padding:          14px 16px;
		font-size:        17px;
		font-weight:      bold;
		color:            $main-black;
		position:         relative;

		&.active {
			color: $main-black;

			&::after {
				content:       '';
				display:       block;
				width:         100%;
				height:        4px;
				background:    $main-gradient;
				position:      absolute;
				bottom:        -4px;
				left:          0;
				border-radius: 5px;
			}
		}

		&:hover {
			color: $main-black;
		}
	}
}

.tabcontent {
	display: block;
	padding: 20px 0;
}

form {
	display:        flex;
	flex-direction: column;

	input {
		margin-bottom:    15px;
		padding:          8px;
		border-radius:    $main-radius;
		border:           none;
		background-color: $main-form-bg;
		color:            $main-grey;
		font-family:      $main-form-font;
		font-size:        0.88rem;
	}

	.enter {
		margin-top:       10%;
		background-color: $main-form-btn-bg;
		color:            $main-form-btn-color;
		padding:          10px;
		border:           none;
		border-radius:    $main-radius;
		cursor:           pointer;
		font-family:      $main-form-font-bold;
		height:           3.13rem;
		font-size:        0.88rem;
	}

	.error {
		color:         red;
		font-size:     0.85rem;
		margin-bottom: 5px;
		display:       block;
	}

	.success {
		color:      green;
		font-size:  1rem;
		margin-top: 10px;
	}
}
</style>