<template>
	<div v-if="!error" class="loading-container">
		<div class="loading-spinner">
			<div class="spinner-circle"></div>
			<div class="spinner-circle"></div>
			<div class="spinner-circle"></div>
			<div class="spinner-circle"></div>
			<div class="spinner-circle"></div>
		</div>
		<p class="loading-text">Загрузка данных...</p>
	</div>
	<error-page v-else/>
</template>

<script>
import ErrorPage from '@/views/ErrorPage.vue'

export default {
	name:       'LoadingComponent',
	components: {
		ErrorPage
	},
	props:      {
		error: {
			type:    Boolean,
			default: false
		}
	}
}
</script>

<style scoped>
.loading-container {
	display:         flex;
	flex-direction:  column;
	align-items:     center;
	justify-content: center;
	min-height:      200px;
	padding:         2rem;
}

.loading-spinner {
	display:       flex;
	gap:           8px;
	margin-bottom: 1rem;
}

.spinner-circle {
	width:         20px;
	height:        20px;
	border-radius: 50%;
	animation:     bounce 0.5s ease-in-out infinite;
}

.spinner-circle:nth-child(1) {
	background-color: #27aae1;
	animation-delay:  0s;
}

.spinner-circle:nth-child(2) {
	background-color: #f7941d;
	animation-delay:  0.1s;
}

.spinner-circle:nth-child(3) {
	background-color: #ffe38e;
	animation-delay:  0.2s;
}

.spinner-circle:nth-child(4) {
	background-color: #ddf;
	animation-delay:  0.3s;
}

.spinner-circle:nth-child(5) {
	background-color: #b8efcf;
	animation-delay:  0.4s;
}

.loading-text {
	font-family:             regular;
	font-size:               1.2rem;
	background:              linear-gradient(45deg, #27aae1, #f7941d);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	margin:                  0;
	animation:               pulse 1.5s ease-in-out infinite;
}

@keyframes bounce {
	0%, 100% {
		transform: translateY(0);
	}
	50% {
		transform: translateY(-10px);
	}
}

@keyframes pulse {
	0%, 100% {
		opacity: 1;
	}
	50% {
		opacity: 0.5;
	}
}
</style> 