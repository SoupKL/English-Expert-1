<template>
  <div>
	<form @submit.prevent="handleLogin">
	  <input type="email" v-model="email" placeholder="Логин/Email"/>
	  <input type="password" v-model="password" placeholder="Пароль"/>
	  <button type="submit" class="enter">Войти</button>
	</form>
  </div>
</template>

<script>
export default {
  data() {
	return {
	  email: '',
	  password: ''
	}
  },
  methods: {
	handleLogin() {
	  console.log('Логин', this.email, this.password)
	}
  }
}
</script>

<style>
@font-face {
  font-family: 'bold';
  src:         url(/src/font/Montserrat-Bold.ttf);
}

@font-face {
  font-family: 'medium';
  src:         url(/src/font/Montserrat-Medium.ttf);
}

@font-face {
  font-family: 'regular';
  src:         url(/src/font/Montserrat-Regular.ttf);
}

body {
  font-family: medium, sans-serif;
  margin:      0;
  padding:     0;
  box-sizing:  border-box;
}

.wrapper {
  width:     100%;
  max-width: 1180px;
  margin:    0 auto;
  padding:   20px;
}

/*  БЛОК ФОРМЫ ВХОДА/РЕГИСТРАЦИИ */

.container {
  width:            100%;
  max-width:        36.25rem;
  height:           28.5rem;
  margin:           50px auto;
  background-color: #fff;
  padding:          20px;
}

.tab {
  display:         flex;
  justify-content: space-around;
  position:        relative;
  margin-bottom:   20px;
}

.tab button {
  background-color: inherit;
  border:           none;
  outline:          none;
  cursor:           pointer;
  padding:          14px 16px;
  font-size:        17px;
  font-weight:      bold;
  color:            #000000;
}

.tab button.active {
  color:    black;
  position: relative;
}

.tab button:hover {
  color: black;
}

.tab button.active::after {
  content:       '';
  display:       block;
  width:         100%;
  height:        4px;
  background:    linear-gradient(to right, rgba(247, 148, 29, 1), rgba(39, 170, 225, 1));
  position:      absolute;
  bottom:        -4px;
  left:          0;
  border-radius: 5px;
}

.tabcontent {
  display: none;
  padding: 20px 0;
}

form {
  display:        flex;
  flex-direction: column;
}

input {
  margin-bottom:    15px;
  padding:          8px;
  border-radius:    0.38rem;
  border:           none;
  background-color: rgb(221, 223, 230);
  color:            rgb(79, 79, 79);
  font-family:      regular;
  font-size:        0.88rem;
}

.enter {
  margin-top:       10%;
  background-color: #f39c12;
  color:            white;
  padding:          10px;
  border:           none;
  border-radius:    0.38rem;
  cursor:           pointer;
  font-family:      bold;
  height:           3.13rem;
  font-size:        0.88rem;
}
</style>
