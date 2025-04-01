<script>
import {ref} from "vue";

export default {
  setup() {
	/** Поменять тип поля входа */
	let formLog = ref(false);

	return {
	  formLog,

	}
  },
  methods: {
	chooseLogIn() {
	  this.formLog = false
	},

	chooseLogOut() {
	  this.formLog = true
	},

	async registerPost() {
	  return (await fetch('http://127.0.0.1:8000/api/register', {
				method: 'POST',
				headers: {
				  'Content-Type': 'application/json'
				},
				credentials: 'include',
				body: {
				  // 'login': this,
				  // 'email':this,
				  // 'name':this
				  // 'password':this
				}
			  }
		  )
	  )
	}

  }
}

</script>

<template>
  <!-- БЛОК ФОРМЫ ВХОДА/РЕГИСТРАЦИИ -->

  <div class="wrapper">

	<main>
	  <div class="container">
		<div class="tab">
		  <button class="tablinks" :class="{'active': !formLog}" @click="chooseLogIn()">Вход</button>
		  <button class="tablinks " :class="{'active': formLog}" @click="chooseLogOut()">Регистрация</button>
		</div>

		<div v-if="formLog === false" class="tabcontent">
		  <form>
			<input type="text" id="login/email" name="login/email" placeholder="Логин/Email">
			<input type="password" id="password" name="password" placeholder="Пароль">
			<button type="submit" class="enter">Войти</button>
		  </form>
		</div>

		<div v-if="formLog === true" class="tabcontent">
		  <form>
			<input type="text" id="name" name="name" placeholder="Имя">
			<input type="text" id="reg-login" name="reg-login" placeholder="Логин">
			<input type="email" id="reg-email" name="reg-email" placeholder="Email">
			<input type="password" id="reg-password" name="reg-password" placeholder="Пароль">
			<button type="submit" class="enter">Войти</button>
		  </form>
		</div>
	  </div>
	</main>
  </div>
</template>

<style scoped>
body {
  font-family: Arial, sans-serif;
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
  background:    linear-gradient(to right, rgba(247, 148, 29, 1.00), rgba(39, 170, 225, 1.00));
  position:      absolute;
  bottom:        -4px;
  left:          0;
  border-radius: 5px;
}

.tabcontent {
  display: block;
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