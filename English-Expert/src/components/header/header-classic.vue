<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()
const isMenuOpen = ref(false)
const showScrollTop = ref(false)

const toggleMenu = (event) => {
  event.stopPropagation()
  isMenuOpen.value = !isMenuOpen.value
}

const handleScroll = () => {
  showScrollTop.value = window.scrollY > 300
}

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

const navigateTo = (path) => {
  router.push(path)
  isMenuOpen.value = false
}

const handleClickOutside = (event) => {
  const menu = document.querySelector('.menu')
  const menuToggle = document.querySelector('.menu-toggle')
  
  if (isMenuOpen.value && menu && !menu.contains(event.target) && !menuToggle.contains(event.target)) {
    isMenuOpen.value = false
  }
}

onMounted(() => {
  if (window.scrollY > 300) {
    showScrollTop.value = true
  }
  window.addEventListener('scroll', handleScroll)
  document.addEventListener('click', handleClickOutside)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
  document.removeEventListener('click', handleClickOutside)
})
</script>

<template>
  <div class="wrapper">
    <header>
      <div id="logo">
        <router-link to="/"><img src="../../assets/logo/logo.svg" alt="English Expert Logo"></router-link>
      </div>
      <div class="menu-toggle" :class="{ 'active': isMenuOpen }" @click.stop="toggleMenu">
        <img src="../../assets/main/header_swip.svg" alt="Menu Icon">
      </div>
      <nav class="menu" :class="{ 'active': isMenuOpen }" @click.stop>
        <div class="nav-item" @click="navigateTo('/all-courses')" style="--i: 1">
          <img src="../../assets/main/all_curs.svg" alt="Курсы">
          <span>Все курсы</span>
        </div>
        <div class="nav-item" @click="navigateTo('/events')" style="--i: 2">
          <span>Мероприятия</span>
        </div>
        <div class="nav-item" style="--i: 3">
          <a href="https://yandex.ru/maps/-/CDx~A8YI">
            <img src="../../assets/main/geolocation.svg" alt="Геолокация">
            <span>Владивосток</span>
          </a>
        </div>
        <div class="nav-item" style="--i: 4">
          <a href="tel:8005553535">
            <span>8 800 555-35-35</span>
          </a>
        </div>
        <div class="nav-item" @click="navigateTo('/auth')" style="--i: 5">
          <img src="../../assets/main/person.svg" alt="Профиль">
          <span>Войти</span>
        </div>
      </nav>
    </header>
  </div>

  <button 
    class="scroll-top" 
    :class="{ 'show': showScrollTop }"
    @click="scrollToTop"
    aria-label="Scroll to top"
  >
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
</template>

<style scoped>
.wrapper {
	width: 100%;
	max-width: 1180px;
	margin: 0 auto;
	padding: 20px;
	position: relative;
	box-sizing: border-box;
}

header, .menu {
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 100%;
	box-sizing: border-box;
}

header {
	background: rgba(255, 255, 255, 0.95);
	backdrop-filter: blur(10px);
	border-radius: 16px;
	padding: 15px 25px;
	box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
	transition: all 0.3s ease;
}

header a {
	font-family: medium;
	font-size: 14px;
	text-decoration: none;
	color: #2c3e50;
	position: relative;
	padding: 8px 12px;
	border-radius: 8px;
	transition: all 0.3s ease;
}

header a:hover {
	color: #3498db;
	background: rgba(52, 152, 219, 0.1);
}

header a::after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 50%;
	width: 0;
	height: 2px;
	background: #3498db;
	transition: all 0.3s ease;
	transform: translateX(-50%);
}

#logo a::after{
	display: none;
}

#logo a:hover{
	background: none;
}

header a:hover::after {
	width: 80%;
}

.menu {
	margin-left: 5%;
	gap: 20px;
}

#logo img {
	max-width: 100%;
	height: auto;
	transition: transform 0.3s ease;
}

#logo:hover img {
	transform: scale(1.05);
}

header a img {
	margin-right: 8px;
	vertical-align: middle;
	transition: transform 0.3s ease;
}

header a:hover img {
	transform: translateY(-2px);
}

::placeholder {
	color: #95a5a6;
}

input#login {
	caret-color: transparent;
	border: none;
	outline: none;
	font-family: medium;
	cursor: pointer;
	background-color: transparent;
	max-width: 50px;
	transition: all 0.3s ease;
}

input#login:focus {
	background-color: rgba(52, 152, 219, 0.1);
	border-radius: 8px;
	padding: 4px 8px;
}

header a:active {
	transform: scale(0.95);
}

.menu-toggle {
	display: none;
	cursor: pointer;
	z-index: 1001;
	transition: all 0.3s ease;
	padding: 8px;
	border-radius: 8px;
	background: transparent;
}

.menu-toggle:hover {
	background: rgba(52, 152, 219, 0.1);
}

.menu-toggle.active {
	transform: rotate(180deg);
}

.menu-toggle img {
	transition: transform 0.3s ease;
}

.menu-toggle:hover img {
	transform: scale(1.1);
}

/* Адаптив header */
@media (max-width: 1200px) {
	.wrapper {
		max-width: 960px;
		padding: 15px;
	}
}

@media (max-width: 992px) {
	.wrapper {
		max-width: 720px;
		padding: 12px;
	}
	
	.menu {
		margin-left: 3%;
		gap: 15px;
	}
	
	header a {
		font-size: 13px;
		padding: 6px 10px;
	}
}

@media (max-width: 768px) {
	.wrapper {
		max-width: 540px;
		padding: 10px;
	}

	header {
		padding: 12px 20px;
		position: relative;
	}

	.menu-toggle {
		display: block;
	}

	.menu {
		position: absolute;
		top: 100%;
		right: 0;
		left: 0;
		background-color: rgba(255, 255, 255, 0.98);
		backdrop-filter: blur(10px);
		box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
		z-index: 1000;
		flex-direction: column;
		justify-content: flex-start;
		align-items: stretch;
		margin: 10px 0 0 0;
		padding: 10px;
		border-radius: 12px;
		opacity: 0;
		visibility: hidden;
		transform: translateY(-10px);
		gap: 5px;
		pointer-events: none;
		transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		will-change: transform, opacity;
	}

	.menu.active {
		opacity: 1;
		visibility: visible;
		transform: translateY(0);
		pointer-events: auto;
	}

	.menu-toggle {
		display: block;
		cursor: pointer;
		z-index: 1001;
		transition: all 0.3s ease;
		padding: 8px;
		border-radius: 8px;
		background: transparent;
		will-change: transform;
	}

	.menu-toggle:hover {
		background: rgba(52, 152, 219, 0.1);
	}

	.menu-toggle.active {
		transform: rotate(180deg);
	}

	.menu-toggle img {
		transition: transform 0.3s ease;
		will-change: transform;
	}

	.menu-toggle:hover img {
		transform: scale(1.1);
	}

	.nav-item {
		padding: 12px 20px;
		border-bottom: 1px solid rgba(52, 152, 219, 0.1);
		opacity: 0;
		transform: translateY(10px);
		transition: all 0.3s ease;
		transition-delay: calc(0.1s * var(--i, 0));
		will-change: transform, opacity;
	}

	.menu.active .nav-item {
		opacity: 1;
		transform: translateY(0);
	}

	.nav-item:last-child {
		border-bottom: none;
	}

	.nav-item img {
		width: 24px;
		height: 24px;
	}

	.nav-item span {
		font-size: 16px;
	}
}

@media (max-width: 576px) {
	.wrapper {
		padding: 8px;
	}

	header {
		padding: 10px 15px;
	}

	#logo img {
		max-width: 120px;
	}

	.menu a {
		font-size: 14px;
		padding: 12px 15px;
	}
}

/* Скрытие иконки меню при разрешении больше 768px */
@media (min-width: 769px) {
	.menu-toggle {
		display: none;
	}
}

.scroll-top {
	position: fixed;
	bottom: 20px;
	left: 20px;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background-color: #fff;
	border: none;
	box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
	cursor: pointer;
	display: flex;
	align-items: center;
	justify-content: center;
	opacity: 0;
	visibility: hidden;
	transform: translateY(20px);
	transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
	z-index: 1000;
	color: #2c3e50;
}

.scroll-top:hover {
	background-color: #3498db;
	color: #fff;
	transform: translateY(-2px);
	box-shadow: 0 6px 20px rgba(52, 152, 219, 0.3);
}

.scroll-top.show {
	opacity: 1;
	visibility: visible;
	transform: translateY(0);
}

@media (max-width: 768px) {
	.scroll-top {
		bottom: 15px;
		left: 15px;
		width: 35px;
		height: 35px;
	}
}

.nav-item {
	display: flex;
	align-items: center;
	gap: 8px;
	cursor: pointer;
	padding: 8px 12px;
	border-radius: 8px;
	transition: all 0.3s ease;
}

.nav-item:hover {
	background-color: rgba(52, 152, 219, 0.1);
}

.nav-item img {
	width: 20px;
	height: 20px;
	transition: transform 0.3s ease;
}

.nav-item:hover img {
	transform: translateY(-2px);
}

.nav-item span {
	font-family: medium;
	font-size: 14px;
	color: #2c3e50;
}

@media (max-width: 430px) {
	.wrapper {
		padding: 5px;
		width: 100%;
		overflow-x: hidden;
	}

	header {
		padding: 8px 12px;
		border-radius: 12px;
		width: 100%;
	}

	#logo {
		width: 100px;
		img {
			max-width: 100%;
			height: auto;
		}
	}

	.menu {
		margin: 8px 0 0 0;
		padding: 8px;
		border-radius: 10px;
		width: calc(100% - 10px);
		left: 5px;
		right: 5px;
	}

	.nav-item {
		padding: 10px 15px;
		gap: 6px;
		width: 100%;
		box-sizing: border-box;

		img {
			width: 20px;
			height: 20px;
			flex-shrink: 0;
		}

		span {
			font-size: 14px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	}

	.menu-toggle {
		padding: 6px;
		flex-shrink: 0;

		img {
			width: 20px;
			height: 20px;
		}
	}

	.scroll-top {
		bottom: 10px;
		left: 10px;
		width: 30px;
		height: 30px;

		svg {
			width: 18px;
			height: 18px;
		}
	}
}

@media (min-width: 431px) and (max-width: 576px) {
	.wrapper {
		padding: 8px;
		width: 100%;
		overflow-x: hidden;
	}

	header {
		padding: 10px 15px;
		width: 100%;
	}

	#logo {
		width: 120px;
		img {
			max-width: 100%;
			height: auto;
		}
	}

	.menu {
		margin: 10px 0 0 0;
		padding: 10px;
		width: calc(100% - 16px);
		left: 8px;
		right: 8px;
	}

	.nav-item {
		padding: 12px 15px;
		width: 100%;
		box-sizing: border-box;

		img {
			width: 22px;
			height: 22px;
			flex-shrink: 0;
		}

		span {
			font-size: 15px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	}

	.menu-toggle {
		padding: 7px;
		flex-shrink: 0;

		img {
			width: 22px;
			height: 22px;
		}
	}

	.scroll-top {
		bottom: 12px;
		left: 12px;
		width: 32px;
		height: 32px;

		svg {
			width: 20px;
			height: 20px;
		}
	}
}
</style>
