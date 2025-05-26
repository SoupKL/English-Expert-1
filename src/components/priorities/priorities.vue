<script lang="js" src="./priorities.js" />

<template>

    <!-- Блок приоритетов -->
        <section class="priorities">
            <div v-for="(prior,index) in priorities_info" class="priority">
                <img :src=getImge(index) alt="">
                <p> {{ prior }}</p>
            </div>
        </section>
</template>

<style lang="scss">
$priority-font: regular;
$priority-font-size: 0.88rem;

.priorities {
  display: flex;
  justify-content: space-between;
  margin-top: 5%;

  .priority {
    p {
      font-family: $priority-font;
      font-size: $priority-font-size;
      width: 11.25rem;
    }
  }

  // Вложенный медиа-запрос
  @media (max-width: 1000px) {
    flex-direction: column;
    align-items: center;
    text-align: center;

    .priority {
      margin-top: 5%;
    }
  }
}
</style>