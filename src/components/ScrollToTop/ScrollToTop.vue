<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const showButton = ref(false)
const scrollThreshold = 300

const handleScroll = () => {
  showButton.value = window.scrollY > scrollThreshold
}

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>
<template>
	<button
			v-show="showButton"
			@click="scrollToTop"
			class="scroll-to-top"
			:class="{ 'show': showButton }"
			aria-label="Scroll to top"
	>
		<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
		>
			<path d="m18 15-6-6-6 6" />
		</svg>
	</button>
</template>

<style scoped>
.scroll-to-top {
	position: fixed;
	bottom: 20px;
	right: 20px;
	background-color: #2c3e50;
	color: white;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	border: none;
	cursor: pointer;
	display: flex;
	align-items: center;
	justify-content: center;
	transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
	z-index: 1000;
	opacity: 0;
	transform: translateY(20px);
	pointer-events: none;
}

.scroll-to-top.show {
	opacity: 1;
	transform: translateY(0);
	pointer-events: auto;
}

.scroll-to-top:hover {
	background-color: #34495e;
	transform: translateY(-2px);
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.scroll-to-top:active {
	transform: translateY(0);
}
</style>