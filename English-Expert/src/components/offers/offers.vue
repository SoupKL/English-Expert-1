<script lang="js" src="./offers.js"/>


<template>
  <div class="cards">
    <div v-for="offers in info" class="card">
      <img :src="offers.img" alt="">
      <p>{{ offers.text }}</p>
    </div>
  </div>
</template>

<style scoped>
.cards{
  display: flex;
  justify-content: space-between;
}

.card{
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

.card p{
  font-family: medium;
  font-size: 0.88rem;
  padding: 1%;
}

@media (max-width: 1000px) {

  .cards{
    flex-direction: column;
    height: 50rem;
    align-items: center;
  }

}
</style>