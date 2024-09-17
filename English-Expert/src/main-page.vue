<script>
import { RouterLink, RouterView } from 'vue-router'
import TestComponent from './components/test-component/test-component.vue'
import ReviewUser from './components/review-user/review-user.vue';
import './assets/script/scroll';
import pruposes from './components/puposes/pruposes.vue';

export default {
  components: {
    TestComponent,
    ReviewUser,
    pruposes
    
  }
}

</script>

<template>
  <div class="wrapper">
    <header>
      <test-component />
    </header>
  </div>
  <section class="testimonials">
    <h2>Отзывы наших студентов</h2>
    <div class="slider">
      <review-user />
    </div>
    <pruposes
      textPruposes1="fwefwefwefewfewfewfewfewfewfewfewf"
    />
  </section>




  <!-- <RouterView /> -->
</template>

<style scoped>
.testimonials {
    width: 100%;
    height: 37rem;
    ;
    padding: 2em 0;
    background-image: url('/src/assets/main/background.svg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
    margin-top: 10%;
}

.testimonials h2 {
    font-family: bold;
    font-size: 2.25rem;
    margin-top: 3.5%;
    text-align: center;
}

.slider {
    display: flex;
    gap: 1em;
    overflow-x: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    padding-bottom: 5em;
}

.slider::-webkit-scrollbar {
    height: 6px;
}

.slider::-webkit-scrollbar-track {
    background: #ffffff;
    border-radius: 10px;
}

.slider::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, rgb(247, 148, 29), rgb(39, 170, 225));
    /* Gradient thumb */
    border-radius: 10px;
}

.slider::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
}

.slider::-webkit-scrollbar-button {
    display: none;
}

.testimonial-item {
    width: 17.5rem;
    flex: 0 0 auto;
    border: 1px solid #ddd;
    padding: 1em;
    scroll-snap-align: start;
    background: white;
    border-radius: 10px;
    color: #000;
    margin: 0 2% 0 2%;
}

.testimonial-item p {
    font-family: medium;
    font-size: 0.88rem;
}



nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }
}
</style>
