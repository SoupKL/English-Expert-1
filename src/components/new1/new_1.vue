<script lang="js" src="./new_1.js"/>
<template>
	<div class="wrapper">
		<h3 id="txt">Новости English Expert</h3>
		<div class="news-container">
			<div v-for="newsItem in newsCard" class="news-card">
				<img :src="newsItem.image" alt="News Image">
				<div class="news-info">
					<span class="news-date">{{ newsItem.date }}</span>
					<h3 class="news-title">{{ newsItem.title }}</h3>
					<p class="news-description">{{ newsItem.description }}</p>
					<a href="new1.html" class="read-more">
						Подробнее <img :src="newsItem.arrow" alt="Arrow Icon">
					</a>
				</div>
			</div>

		</div>
	</div>
	<rabbit/>
</template>

<style lang="scss">
$main-font:   Arial, sans-serif;
$main-bg:     #00093c;
$main-white:  #fff;
$main-black:  #000;
$main-blue:   #00093c;
$main-orange: rgb(247, 148, 29);
$main-shadow: 0 15px 25px -10px rgba(39, 170, 225, 0.5), 0 -15px 25px -10px rgba(247, 148, 29, 0.5);

body {
	font-family: $main-font;
	margin:      0;
	padding:     0;
	box-sizing:  border-box;
}

/* HEADER */
.up {
	background-color: $main-bg;
}

header, .menu {
	display:         flex;
	justify-content: space-between;
	align-items:     center;
	width:           100%;

	a {
		font-family:     medium;
		font-size:       14px;
		text-decoration: none;
		color:           $main-white;

		img {
			margin-right:   5pt;
			vertical-align: middle;
		}

		&:active {
			transform: scale(0.95);
		}
	}
}

.menu {
	margin-left: 5%;

	@media (max-width: 1000px) {
		display:          none;
		position:         absolute;
		top:              calc(100% + 10px);
		right:            0;
		left:             0;
		background-color: $main-bg;
		box-shadow:       0 4px 8px rgba(0, 0, 0, 0.1);
		z-index:          1000;
		text-align:       center;

		&.active {
			display: block;
		}

		a {
			display:         block;
			padding:         10px 20px;
			text-decoration: none;
			color:           $main-white;
			font-size:       14px;

			&:hover {
				background-color: #f0f0f0;
				color:            $main-bg;
			}
		}

		input {
			max-width: initial;
		}
	}
}

#logo img {
	max-width: 100%;
}

::placeholder {
	color: $main-white;
}

input#login {
	caret-color:      transparent;
	border:           none;
	outline:          none;
	font-family:      medium;
	cursor:           pointer;
	background-color: $main-bg;
	max-width:        50px;
}

/* Блок новостей */
#txt {
	font-family: bold;
	font-size:   2.25rem;

	@media (max-width: 1000px) {
		font-size:  2rem;
		text-align: center;
	}
}

.news-container {
	display:         flex;
	flex-wrap:       wrap;
	justify-content: space-between;
	max-width:       1200px;
	margin:          20px auto;

	@media (max-width: 1000px) {
		flex-direction: column;
		align-items:    center;
	}

	.news-card {
		width:         calc(33.33% - 20px);
		margin-bottom: 20px;
		position:      relative;
		overflow:      hidden;
		border-radius: 8px;
		box-shadow:    $main-shadow;

		@media (max-width: 1000px) {
			width: 18rem;
		}

		img {
			width:      100%;
			height:     40%;
			object-fit: cover;
		}

		.news-info {
			padding:    20px;
			background: $main-white;

			.news-date {
				font-size:   0.75rem;
				color:       $main-black;
				font-family: regular;
			}

			.news-title {
				margin:      10px 0;
				font-size:   1.13rem;
				color:       $main-blue;
				font-family: medium;
			}

			.news-description {
				color:       #4f4f4f;
				font-family: regular;
				font-size:   0.75rem;
			}

			.read-more {
				display:         inline-flex;
				align-items:     center;
				color:           $main-bg;
				text-decoration: none;
				font-size:       0.88rem;
				margin-top:      10px;
				font-family:     medium;

				img {
					margin-left: 5px;
				}
			}
		}
	}
}

/* БЛОК ФОРМЫ */
.rabbit_helper {
	margin-top:       15%;
	width:            100%;
	border-radius:    20px;
	display:          flex;
	background-color: $main-white;
	position:         relative;
	margin-bottom:    -10%;
	z-index:          1;

	@media (max-width: 1000px) {
		margin-top:     15%;
		flex-direction: column;
		align-items:    center;
		margin-bottom:  0%;
	}

	.rh_l, .rh_r {
		padding: 2%;

		@media (max-width: 1000px) {
			width:   100%;
			padding: 0;
		}
	}

	.rh_l img {
		@media (max-width: 1000px) {
			width: 90%;
		}
	}

	.rh_r {
		width: 27.5rem;

		@media (max-width: 1000px) {
			margin-top: 20px;
		}
	}
}

form {
	padding: 3%;

	.form-group {
		margin-bottom: 20px;

		&.full-width {
			width: 100%;

			@media (max-width: 1000px) {
				margin-bottom: 0%;
			}
		}

		&.horizontal {
			display:         flex;
			justify-content: space-between;
			width:           27.5rem;

			@media (max-width: 1000px) {
				flex-direction: column;
				width:          105%;
			}

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
				font-family:      bold;
				padding:          10px 20px;
				background-color: $main-orange;
				color:            $main-white;
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
			background-color: #bebebe;
			border-radius:    4px;
			font-size:        0.88rem;
			font-family:      regular;
			height:           3.13rem;
			width:            100%;

			@media (max-width: 1000px) {
				&.email,
				&.phone {
					width:      565px;
					margin-top: 5%;
				}
			}
		}
	}
}

/* FOOTER */
footer {
	display:          flex;
	flex-direction:   row;
	background-color: rgb(0, 9, 60);
	color:            $main-white;
	text-align:       center;
	padding:          20px;

	.info_f {
		display:         flex;
		justify-content: space-between;
		height:          13.38rem;
		align-items:     end;

		p {
			font-family: medium;
			font-size:   0.88rem;
		}

		@media (max-width: 1000px) {
			flex-direction: column;
			align-items:    center;
		}
	}
}
</style>