<template>
  <div>
    <site-header />
    <div class="wrapper">
      <main>
        <div class="container">
          <div class="tab">
            <button class="tablinks" @click="currentTab = 'Login'">Вход</button>
            <button class="tablinks" @click="currentTab = 'Register'">Регистрация</button>
          </div>
          <LoginForm v-if="currentTab === 'Login'" />
          <RegisterForm v-if="currentTab === 'Register'" />
        </div>
      </main>
    </div>
    <site-footer />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import SiteFooter from '@/components/common/SiteFooter.vue'
import SiteHeader from '@/components/common/SiteHeader.vue'
import LoginForm from '@/components/auth/LoginForm.vue'
import RegisterForm from '@/components/auth/RegisterForm.vue'

// Используем ref для хранения текущей вкладки
const currentTab = ref('Login')
console.log(currentTab)
</script>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.wrapper {
  width: 100%;
  max-width: 1180px;
  margin: 0 auto;
  padding: 20px;
}

.container {
  width: 100%;
  max-width: 36.25rem;
  height: 28.5rem;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
}

.tab {
  display: flex;
  justify-content: space-around;
  margin-bottom: 20px;
}

.tab button {
  background-color: inherit;
  border: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  font-family: medium;
  color: #000;
}

.tab button.active {
  color: black;
  position: relative;
}

.tab button:hover {
  color: black;
}

.tab button.active::after {
  content: '';
  display: block;
  width: 100%;
  height: 4px;
  background: linear-gradient(to right, rgba(247, 148, 29, 1), rgba(39, 170, 225, 1));
  position: absolute;
  bottom: -4px;
  left: 0;
  border-radius: 5px;
}

form {
  display: flex;
  flex-direction: column;
}

input {
  margin-bottom: 15px;
  padding: 8px;
  border-radius: 0.38rem;
  border: none;
  background-color: rgb(221, 223, 230);
  color: rgb(79, 79, 79);
  font-family: regular;
  font-size: 0.88rem;
}

.enter {
  margin-top: 10%;
  background-color: #f39c12;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 0.38rem;
  cursor: pointer;
  font-family: bold;
  height: 3.13rem;
  font-size: 0.88rem;
}
</style>
