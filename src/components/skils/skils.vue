<script lang="js" src="./skils.js"/>
<template>
  <div class="wrapper">

	<div class="txt_skills">
	  <h2>Добро пожаловать в English Expert</h2>
	</div>

	<section class="skills">

	  <div v-for="info in skill" class="skill">
		<img :src="info.image" alt="Skill 1">
		<p>{{ info.text }}</p>
	  </div>
	</section>

  </div>
</template>

<style lang="scss" scoped>
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

.skill {
	width: 17.5rem;

	p{
		font-size: 1.13rem;
		font-family: medium;
	}
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

.purposes {
  color: black;
  display: flex;
  width: 100%;
  margin-top: 5%;

  &_left {
    padding-right: 7%;
  }

  &_right {
    display: flex;
    justify-content: space-between;
  }

  &_card {
    width: 11rem;
    margin-right: 1%;
    margin-left: 1%;

    h3 {
      font-family: bold;
      font-size: 1.5rem;
    }

    p {
      font-family: regular;
      font-size: 0.88rem;
    }
  }

  @media (max-width: 768px) {
    flex-direction: column;
    align-items: center;
    gap: 20px;

    &_left {
      padding-right: 0;
      text-align: center;

      img {
        max-width: 200px;
        height: auto;
      }
    }

    &_right {
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    &_card {
      width: calc(50% - 20px);
      margin: 0;
      text-align: center;

      img {
        max-width: 60px;
        height: auto;
      }

      h3 {
        font-size: 1.2rem;
        margin: 10px 0;
      }

      p {
        font-size: 0.8rem;
      }
    }
  }

  @media (max-width: 430px) {
    margin-top: 3%;

    &_left {
      img {
        max-width: 150px;
      }
    }

    &_right {
      flex-direction: column;
      gap: 15px;
    }

    &_card {
      width: 100%;
      padding: 0 15px;

      img {
        max-width: 50px;
      }

      h3 {
        font-size: 1.1rem;
        margin: 8px 0;
      }

      p {
        font-size: 0.75rem;
        line-height: 1.4;
      }
    }
  }
}
</style>