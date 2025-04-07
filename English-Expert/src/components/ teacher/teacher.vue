<script lang="js" src="./teacher.js">

</script>

<template>
  <div
      v-for="info in teachers_info"
      class="card"
  >
    <img :src="info.img" alt="">
    <h3>{{ info.name }}</h3>
    <p> {{ info.text }}</p>
  </div>
</template>

<style scoped>
.card {
  width: 17.5rem;
  height: 22.5rem;
  background-color: white;
  border-radius: 20px;
  display: flex;
  flex-direction: column; /* Выстраиваем элементы по вертикали */
  justify-content: center; /* Центрируем по вертикали */
  align-items: center; /* Центрируем по горизонтали */
  text-align: center;
}

.card p {
  font-family: medium;
  font-size: 0.88rem;
  padding: 1%;
}

.card h3 {
  font-family: bold;
  font-size: 1.13rem;
  color: black;
}
</style>