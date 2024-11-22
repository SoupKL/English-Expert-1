<script lang="js" src="./skils.js"/>
<template>
  <div class="wrapper">

	<div class="txt_skills">
	  <h2>Добро пожаловать в English Expert</h2>
	</div>

	<section class="skills">

	  <div v-for="info in skill" class="skill">
		<img :src="genImage(info.image)" alt="Skill 1">
		<p>{{ info.text }}</p>
	  </div>
	</section>

  </div>
</template>

<style scoped>
/* БЛОК НАВЫКИ */

.txt_skills h2{
  font-family: bold;
  font-size: 2.25rem;
  font-family: bold;
  margin-top: 10%;
}

.skills{
  display: flex;
  justify-content: space-between;
  margin-top: 6%;
}

.skill p{
  font-size: 1.13rem;
  font-family: medium;
}

.skill{
  width: 17.5rem;
}

/* Адаптив Блока навыков */

@media (max-width: 1000px) {

  .txt_skills h2{
	font-size: 2rem;
  }

  .skills{
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	align-items: center;
	text-align: center;
	margin-top: 6%;
  }

  .skill p{
	font-size: 1rem;
  }
}

</style>