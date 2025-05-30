<template>
	<footer>
		<div class="wrapper">
			<div class="info_f">
				<img src="@/assets/main/logo_white.svg" alt="Logo"/>
				<p>8 800 555-35-35</p>
				<p>г. Владивосток, ул. Жигура, д. 26</p>
				<a class="telegram" href="https://t.me/EnglishExperte">Telegram</a>
				<a class="vk" href="https://vk.com/club228670575">VK</a>
				<p>© English Expert</p>
			</div>
		</div>
	</footer>
</template>

<script>
export default {
	name: 'SiteFooter'
	// Здесь можешь добавить другие свойства, если нужно
}
</script>

<style lang="scss" scoped>
$footer-bg:             rgb(0, 9, 60);
$footer-color:          #fff;
$footer-padding:        20px;
$footer-font:           medium;
$footer-font-size:      0.88rem;
$footer-link-font-size: 0.98rem;
$telegram-color:        #73e5e8;
$vk-color:              #3d9cff;

footer {
	display:          flex;
	flex-direction:   row;
	background-color: $footer-bg;
	color:            $footer-color;
	text-align:       center;
	padding:          $footer-padding;
	margin-top:       auto;

	.info_f {
		display:         flex;
		justify-content: space-between;
		height:          9.69rem;
		align-items:     end;
		width:           100%;

		p {
			font-family: $footer-font;
			font-size:   $footer-font-size;
		}

		a {
			font-family:     $footer-font;
			font-size:       $footer-link-font-size;
			margin-top:      1em;
			margin-bottom:   1em;
			text-decoration: none;

			&.telegram {
				color: $telegram-color;

				&:after {
					content:    ' ';
					background: url('../../assets/main/telegram-svgrepo-com.svg');
					height:     100px;
					width:      100px;
				}
			}

			&.vk {
				color: $vk-color;
			}
		}
	}
}

@media screen and (max-width: 768px) {
	footer {
		.info_f {
			height:    auto;
			flex-wrap: wrap;
			gap:       1rem;
			padding:   1rem 0;

			img {
				width:  120px;
				height: auto;
			}

			p, a {
				width:      100%;
				text-align: center;
			}
		}
	}
}

@media screen and (max-width: 430px) {
	footer {
		padding: 1rem;

		.info_f {
			flex-direction: column;
			align-items:    center;
			gap:            0.5rem;

			img {
				width:         100px;
				margin-bottom: 0.5rem;
			}

			p {
				font-size: 0.8rem;
				margin:    0.3rem 0;
			}

			a {
				font-size: 0.9rem;
				margin:    0.3rem 0;

				&.telegram:after {
					height: 50px;
					width:  50px;
				}
			}
		}
	}
}
</style>