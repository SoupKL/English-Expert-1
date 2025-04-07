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

<style scoped>
/* FOOTER */

footer {
  display: flex;
  flex-direction: row;
  background-color: rgb(0, 9, 60);
  color: #fff;
  text-align: center;
  padding: 20px;
}

.info_f {
  display: flex;
  justify-content: space-between;
  height: 9.69rem;
  align-items: end;
}

.info_f p {
  font-family: medium;
  font-size: 0.88rem;
}

.info_f a {
  font-family: medium;
  font-size: 0.98rem;
  margin-top: 1em;
  margin-bottom: 1em;
  text-decoration: none;
}

.telegram {
  color: #73e5e8;
}

.telegram:after {
  content: ' ';
  background: url('../../assets/main/telegram-svgrepo-com.svg');
  height: 100px;
  width: 100px;
}

.vk{
  color: #3d9cff;
}
</style>