<template>
  <div class="up">
    <div class="wrapper">
      <header>
        <div id="logo">
          <router-link to="/main">
            <img src="@/assets/main/logo_white.svg" alt="logo" />
          </router-link>
        </div>
        <div class="menu-toggle">
          <img src="@/assets/main/header_swip_white.svg" alt="menu icon" />
        </div>
        <nav class="menu">
          <router-link to="/courses">
            <img src="@/assets/main/all_curs.svg" />Все курсы
          </router-link>
          <router-link to="/events">Мероприятия</router-link>
          <a href="#"><img src="@/assets/main/geolocation.svg" />Владивосток </a>
          <a href="tel:8005553535">8 800 555-35-35</a>
        </nav>
      </header>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SiteHeader'
}
</script>

<style scoped>
/* HEADER */

.up {
  background-color: #00093c;
}

header,
.menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

header a {
  font-family: medium;
  font-size: 14px;
  text-decoration: none;
  color: white;
}

.menu {
  margin-left: 5%;
}

#logo img {
  max-width: 100%;
}

header a img {
  margin-right: 5pt;
  vertical-align: middle;
}

header a:active {
  transform: scale(0.95);
}

/* Адаптив header */

@media (max-width: 1000px) {
  .wrapper {
    width: 100%;
    max-width: 600px;
  }

  header {
    flex-direction: row;
    justify-content: space-between;
    position: relative; /* Добавляем позиционирование для родительского header */
  }

  .menu-toggle {
    display: block; /* Показываем кнопку меню */
    cursor: pointer;
  }

  .menu {
    display: none; /* Скрываем основное меню */
    position: absolute;
    top: calc(100% + 10px); /* Меню будет располагаться под кнопкой с отступом 10px */
    right: 0;
    left: 0;
    background-color: #00093c;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    text-align: center; /* Центрируем элементы внутри меню */
  }

  .menu a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: white;
    font-size: 14px;
  }

  .menu a:hover {
    background-color: #f0f0f0;
    color: #00093c;
  }

  .menu input {
    max-width: initial; /* Вернуть изначальную ширину для поля ввода */
  }

  .menu.active {
    display: block; /* Показываем меню при активации */
  }
}

/* Скрытие иконки меню при разрешении больше 900px */
@media (min-width: 1000px) {
  .menu-toggle {
    display: none;
  }
}
</style>
