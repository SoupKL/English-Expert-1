<script lang="js" src="./offers.js"/>


<template>
  <div class="cards">
    <div v-for="offers in info" class="card">
      <img :src="offers.img" alt="">
      <p>{{ offers.text }}</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
$card-width: 17.5rem;
$card-height: 22.5rem;
$card-radius: 20px;
$card-bg: white;
$card-font: medium;
$card-font-size: 0.88rem;

.cards {
  display: flex;
  justify-content: space-between;

  @media (max-width: 1000px) {
    flex-direction: column;
    height: 50rem;
    align-items: center;
  }

  .card {
    width: $card-width;
    height: $card-height;
    background-color: $card-bg;
    border-radius: $card-radius;
    display: flex;
    flex-direction: column; // Выстраиваем элементы по вертикали
    justify-content: center; // Центрируем по вертикали
    align-items: center; // Центрируем по горизонтали
    text-align: center;

    p {
      font-family: $card-font;
      font-size: $card-font-size;
      padding: 1%;
    }
  }
}
</style>