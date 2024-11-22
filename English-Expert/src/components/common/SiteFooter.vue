<template>
  <footer>
    <div class="wrapper">
      <div class="info_f">
        <img src="@/assets/main/logo_white.svg" alt="Logo" />
        <p>8 800 555-35-35</p>
        <p>г. Владивосток, ул. Жигура, д. 26</p>
        <p>English_Expert@mail.ru</p>
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
</style>