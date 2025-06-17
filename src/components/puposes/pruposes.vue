<script lang="js" src="./pruposes.js"/>

<template>
	<div class="purposes">

		<div class="purposes_left">
			<img src="/cours/rabbit1.svg" alt="">
		</div>

		<div class="purposes_right">
			<div v-for="(text, index) in textPruposes1" class="purposes_card">
				<img :src="'/cours/purpose_'+(index+1)+'.svg'" alt="">
				<h3>Цель {{ index + 1 }}</h3>
				<p>{{ text }}</p>
			</div>
		</div>

	</div>

</template>
<style lang="scss">
.purposes {
	color:      black;
	display:    flex;
	width:      100%;
	margin-top: 5%;

	&_left {
		padding-right: 7%;
	}

	&_right {
		display:         flex;
		justify-content: space-between;
	}

	&_card {
		width:        11rem;
		margin-right: 1%;
		margin-left:  1%;

		h3 {
			font-family: bold;
			font-size:   1.5rem;
		}

		p {
			font-family: regular;
			font-size:   0.88rem;
		}	}
}
</style>