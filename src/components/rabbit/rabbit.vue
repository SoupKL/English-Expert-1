<script setup>
defineOptions({
	name: 'RabbitHelper'
})
</script>

<template>
	<div class="rabbit-wrapper">
		<div class="rabbit_helper">
			<div class="rh_l">
				<img src="../../../src/assets/main/rabbit2.svg" alt="кролик помощник нижний">
			</div>
			<div class="rh_r">

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
					<button onclick="alert('Упс... Что то пошло не так')" type="submit">Отправить</button>
				</div>
			</div>
		</div>
	</div>
</template>

<style lang="scss" scoped>
$rabbit-bg:             #fff;
$rabbit-radius:         20px;
$rabbit-shadow:         none;
$rabbit-form-font:      regular;
$rabbit-form-font-bold: bold;
$rabbit-form-color:     #4f4f4f;
$rabbit-form-bg:        rgba(0, 9, 60, 0.1);
$rabbit-form-btn-bg:    rgb(247, 148, 29);
$rabbit-form-btn-color: #fff;

.rabbit-wrapper {
	width:         100%;
	max-width:     1200px;
	margin:        0 auto;
	padding:       0 15px;
	box-sizing:    border-box;
	border-radius: 20px;
}

.rabbit_helper {
	margin-top:       15%;
	width:            100%;
	border-radius:    $rabbit-radius;
	display:          flex;
	background-color: $rabbit-bg;
	position:         relative;
	margin-bottom:    -10%;
	z-index:          1;
	box-sizing:       border-box;
	box-shadow:       0 4px 160px #00000014;

	.rh_l {
		padding:     2%;
		flex-shrink: 0;

		img {
			max-width: 100%;
			height:    auto;
		}
	}

	.rh_r {
		width:      27.5rem;
		padding:    2%;
		box-sizing: border-box;
	}

	.form-group {
		margin-bottom: 20px;
		box-sizing:    border-box;

		&.full-width {
			width: 100%;
		}

		&.horizontal {
			display:         flex;
			justify-content: space-between;
			width:           100%;
			gap:             15px;

			div {
				flex:      1;
				min-width: 0;
			}
		}

		&.vertical {
			display:         flex;
			justify-content: space-between;
			width:           100%;
			gap:             15px;

			p {
				margin:    0;
				font-size: 0.63rem;
				flex:      1;
				min-width: 0;
			}

			button {
				font-size:        0.88rem;
				font-family:      $rabbit-form-font-bold;
				padding:          10px 20px;
				background-color: $rabbit-form-btn-bg;
				color:            $rabbit-form-btn-color;
				border:           none;
				border-radius:    10px;
				flex:             1;
				min-width:        0;
				cursor:           pointer;
				transition:       background-color 0.3s ease;

				&:hover {
					background-color: darken($rabbit-form-btn-bg, 5%);
				}
			}
		}

		input[type="text"],
		input[type="email"],
		input[type="phone"] {
			padding:          8px;
			border:           none;
			background-color: $rabbit-form-bg;
			border-radius:    4px;
			color:            $rabbit-form-color;
			font-size:        0.88rem;
			font-family:      $rabbit-form-font;
			height:           3.13rem;
			width:            100%;
			box-sizing:       border-box;

			&::placeholder {
				color: rgba($rabbit-form-color, 0.7);
			}
		}
	}

	// Large tablets and small desktops
	@media (max-width: 1200px) {
		margin-top:    10%;
		margin-bottom: -5%;
	}

	// Tablets
	@media (max-width: 992px) {
		margin-top:    8%;
		margin-bottom: -3%;

		.rh_r {
			width: 100%;
		}
	}

	// Large phones
	@media (max-width: 768px) {
		margin-top:     5%;
		margin-bottom:  0;
		flex-direction: column;

		.rh_l {
			display: none;
		}

		.rh_r {
			width:   100%;
			padding: 20px;
		}

		.form-group {
			margin-bottom: 15px;

			&.horizontal {
				flex-direction: column;
				gap:            15px;
			}

			&.vertical {
				flex-direction: column;
				gap:            15px;

				p {
					width:      100%;
					font-size:  0.7rem;
					text-align: center;
				}

				button {
					width:     100%;
					padding:   12px;
					font-size: 1rem;
				}
			}
		}
	}

	// Small phones
	@media (max-width: 430px) {
		.rh_r {
			padding: 15px;
		}

		.form-group {
			input[type="text"],
			input[type="email"],
			input[type="phone"] {
				height:    2.8rem;
				font-size: 0.9rem;
			}
		}
	}
}
</style>
