<script setup>
import {ref} from 'vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}
</script>

<template>
  <div class="wrapper">
    <header>
      <div id="logo">
        <router-link to="/"><img src="../../assets/logo/logo.svg" alt="English Expert Logo"></router-link>
      </div>
      <div class="menu-toggle" :class="{ 'active': isMenuOpen }" @click="toggleMenu">
        <img src="../../assets/main/header_swip.svg" alt="Menu Icon">
      </div>
      <nav class="menu" :class="{ 'active': isMenuOpen }">
        <router-link to="/all-courses" style="--i: 1">Все курсы</router-link>
        <router-link to="/events" style="--i: 2">Мероприятия</router-link>
        <a href="https://yandex.ru/maps/-/CDx~A8YI" style="--i: 3"><img src="../../assets/main/geolocation.svg" alt="Геолокация">Владивосток</a>
        <a href="tel:8005553535" style="--i: 4">8 800 555-35-35</a>
        <form style="--i: 5">
          <router-link to="/auth"><img src="../../assets/main/person.svg" alt="Профиль"><input
              type="text" id="login" name="loginname"
              placeholder="Войти"></router-link>
        </form>
      </nav>
    </header>
  </div>
</template>

<style scoped>
.wrapper {
  width: 100%;
  max-width: 1180px;
  margin: 0 auto;
  padding: 20px;
}

header, .menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

header a {
  font-family: medium;
  font-size: 14px;
  text-decoration: none;
  color: black;
}

.menu {
  margin-left: 5%;
}

#logo img {
  max-width: 100%;
  height: auto;
}

header a img {
  margin-right: 5pt;
  vertical-align: middle;
}

::placeholder {
  color: black;
}

input#login {
  caret-color: transparent;
  border: none;
  outline: none;
  font-family: medium;
  cursor: pointer;
  background-color: white;
  max-width: 50px;
}

header a:active {
  transform: scale(0.95);
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
  }

  header a {
    font-size: 13px;
  }
}

@media (max-width: 768px) {
  .wrapper {
    max-width: 540px;
    padding: 10px;
  }

  header {
    flex-direction: row;
    justify-content: space-between;
    position: relative;
  }

  .menu-toggle {
    display: block;
    cursor: pointer;
    z-index: 1001;
    transition: transform 0.3s ease;
  }

  .menu-toggle.active {
    transform: rotate(180deg);
  }

  .menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.98);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0;
    padding: 20px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-20px);
    backdrop-filter: blur(5px);
  }

  .menu.active {
    display: flex;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .menu a {
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    color: black;
    font-size: 16px;
    width: 100%;
    text-align: center;
    border-bottom: 1px solid #eee;
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
    transition-delay: calc(0.1s * var(--i, 0));
  }

  .menu.active a {
    opacity: 1;
    transform: translateY(0);
  }

  .menu a:last-child {
    border-bottom: none;
  }

  .menu a:hover {
    background-color: #f8f8f8;
  }

  .menu input {
    max-width: initial;
  }
}

@media (max-width: 576px) {
  .wrapper {
    padding: 8px;
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
</style>
