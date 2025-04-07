<script setup>

</script>

<template>
  <div class="wrapper">
	<div class="rabbit_helper">
	  <div class="rh_l">
		<img src="../../../src/assets/main/rabbit2.svg" alt="кролик помощник нижний">
	  </div>
	  <div class="rh_r">

		<div class="form-group full-width">
		  <input type="text" id="name" name="name" placeholder="Ваше имя">
		</div>
		<div class="form-group horizontal">
		  <div>
			<input type="phone" id="phone" name="phone" placeholder="Ваш телефон">
		  </div>
		  <div>
			<input type="email" id="email" name="email" placeholder="Ваш e-mail">
		  </div>
		</div>
		<div class="form-group vertical">
		  <p>Нажимая на кнопку, я соглашаюсь на обработку персональных данных и с правилами пользования Платформой</p>
		  <button onclick="alert('Упс... Что то пошло не так')" type="submit">Отправить</button>
		</div>
	  </div>
	</div>
  </div>
</template>

<style scoped>
.rabbit_helper {
  margin-top:       15%;
  width:            100%;
  border-radius:    20px;
  display:          flex;
  background-color: #fff;
  position:         relative;
  margin-bottom:    -10%;
  z-index:          1;
}

.rh_l, .rh_r {
  padding: 2%;
}

.rh_r {
  width: 27.5rem;
}

form {
  padding: 3%;
}

.form-group {
  margin-bottom: 20px;
}

.form-group.full-width {
  width: 100%;
}

.form-group.horizontal {
  display:         flex;
  justify-content: space-between;
  width:           27.5rem;
}

.form-group.horizontal div {
  width: 13.13rem;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="phone"] {
  padding:          8px;
  border:           none;
  background-color: rgba(0, 9, 60, 0.1);
  border-radius:    4px;
  color:            #4F4F4F;
  font-size:        0.88rem;
  font-family:      regular;
  height:           3.13rem;
}

.form-group input[type="text"] {
  width: 100%;
}

.form-group.vertical {
  display:         flex;
  justify-content: space-between;
  width:           27.5rem;
}

.form-group.vertical p {
  margin:    0;
  font-size: 0.63rem;
  width:     13.22rem;
}

.form-group.vertical button {
  font-size:        0.88rem;
  font-family:      bold;
  padding:          10px 20px;
  background-color: rgb(247, 148, 29);
  color:            #fff;
  border:           none;
  border-radius:    10px;
  width:            13.22rem;
}

@media (max-width: 1000px) {

  .rabbit_helper {
	display: none;
  }

}
</style>