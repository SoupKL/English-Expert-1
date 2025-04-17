<script setup>

</script>

<template>
	<div class="wrapper">
		<header>
			<div id="logo">
				<router-link to="/"><img src="../../assets/logo/logo.svg" alt="English Expert Logo"></router-link>
			</div>
			<div class="menu-toggle">
				<img src="../../assets/main/header_swip.svg" alt="Menu Icon">
			</div>
			<nav class="menu">
				<router-link to="/all-courses">Все курсы</router-link>
				<router-link to="/events">Мероприятия</router-link>
				<a href="https://yandex.ru/maps/-/CDx~A8YI"><img src="../../assets/main/geolocation.svg" alt="Геолокация">Владивосток</a>
				<a href="tel:8005553535">8 800 555-35-35</a>
				<form>
					<router-link to="./auth"><img src="../../assets/main/person.svg" alt="Профиль"><input
							type="text" id="login" name="loginname"
							placeholder="Войти"></router-link>
				</form>
			</nav>
		</header>
	</div>
</template>

<style lang="scss" scoped>
$main-black:    black;
$main-white:    white;
$main-blue:     #f0f0f0;
$header-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

.wrapper {
	width:     100%;
	max-width: 1180px;
	margin:    0 auto;
	padding:   20px;

	@media (max-width: 1000px) {
		width:     100%;
		max-width: 600px;
	}
}

header {
	display:         flex;
	justify-content: space-between;
	align-items:     center;
	width:           100%;

	#logo {
		img {
			max-width: 100%;
		}
	}

	.menu-toggle {
		display: none;

		@media (max-width: 1000px) {
			display: block;
			cursor:  pointer;
		}
	}

	.menu {
		display:         flex;
		justify-content: space-between;
		align-items:     center;
		margin-left:     5%;

		a {
			font-family:     medium;
			font-size:       14px;
			text-decoration: none;
			color:           $main-black;

			&:active {
				transform: scale(0.95);
			}

			img {
				margin-right:   5pt;
				vertical-align: middle;
			}
		}

		form {
			input#login {
				caret-color:      transparent;
				border:           none;
				outline:          none;
				font-family:      medium;
				cursor:           pointer;
				background-color: $main-white;
				max-width:        50px;
			}
		}
	}
}

::placeholder {
	color: $main-black;
}

/* Адаптив header */
@media (max-width: 1000px) {
	.wrapper {
		width:     100%;
		max-width: 600px;
	}

	header {
		flex-direction:  row;
		justify-content: space-between;
		position:        relative; /* Добавляем позиционирование для родительского header */
	}

	.menu-toggle {
		display: block; /* Показываем кнопку меню */
		cursor:  pointer;
	}

	.menu {
		display:          none; /* Скрываем основное меню */
		position:         absolute;
		top:              calc(100% + 10px); /* Меню будет располагаться под кнопкой с отступом 10px */
		right:            0;
		left:             0;
		background-color: $main-white;
		box-shadow:       0 4px 8px rgba(0, 0, 0, 0.1);
		z-index:          1000;
		text-align:       center; /* Центрируем элементы внутри меню */

		&.active {
			display: block; /* Показываем меню при активации */
		}

		a {
			display:         block;
			padding:         10px 20px;
			text-decoration: none;
			color:           $main-black;
			font-size:       14px;

			&:hover {
				background-color: $main-blue;
			}
		}

		input {
			max-width: initial; /* Вернуть изначальную ширину для поля ввода */
		}
	}
}

/* Скрытие иконки меню при разрешении больше 900px */
@media (min-width: 1000px) {
	.menu-toggle {
		display: none;
	}
}
</style>
