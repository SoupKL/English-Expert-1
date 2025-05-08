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

	.info_f {
		display:         flex;
		justify-content: space-between;
		height:          9.69rem;
		align-items:     end;

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
</style>