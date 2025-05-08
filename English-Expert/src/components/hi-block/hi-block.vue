<script setup lang="ts">

</script>

<template>
	<div class="hi">
		<div class="hi_left">
			<img src="../../assets/about/rabbit.svg" alt="">
		</div>
		<div class="hi_right">
			<div class="right_1">
				<img src="../../assets/about/cross.svg" alt="">
				<p>Мы создали онлайн-школу по английскому языку
					для детей, где компьютеры становятся
					не просто инструментами или игрушками,
					а верными спутниками на пути обучения и
					развития.</p>
			</div>
			<div class="right_1">
				<img src="../../assets/about/circle.svg" alt="">
				<p>Мы создали онлайн-школу по английскому языку
					для подростков, чтобы вопрос
					"Кем я хочу стать?" больше не казался таким
					сложным.</p>
			</div>
			<div class="right_1">
				<img src="../../assets/about/triangle.svg" alt="">
				<p>Мы создали онлайн-школу по английскому языку
					для взрослых, чтобы у них была возможность
					начать с читатого листа и создать лучшую
					версию себя в любом возрасте.</p>
			</div>
		</div>
	</div>
</template>

<style lang="scss" scoped>
$hi-font: regular;
$hi-font-size: 0.88rem;

.hi {
	margin-top: 5%;
	display:    flex;

	.hi_left {
		// Можно добавить стили для левой части, если потребуется
	}

	.hi_right {
		display:      flex;
		margin-right: 2%;

		.right_1 {
			width:       15.38rem;
			margin-left: 5%;
			font-size:    $hi-font-size;
			font-family:  $hi-font;
		}
	}
}

/* Адаптив блока приветствия */

@media (max-width: 1000px) {

	.hi {
		flex-direction: column;
	}

	.hi_right {
		margin-top: 5%;
	}

}

</style>
