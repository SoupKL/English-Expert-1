<script setup>
import CoursesBlock from '../components/courses-block/courses-block.vue'

</script>

<template>
  <div class="wrapper">
	<div class="profile">
	  <div class="profile_info">
		<img class="profile_avatar" src="../assets/logo.svg">
		<div class="profile_text-block">
		  <div class="profile_name">
			Имя пользователя
		  </div>
		  <div class="profile_email">
			логин пользователя
		  </div>
		</div>
	  </div>
	  <div class="profile_courses">
		<div class="profile_courses-text">
		  <p>Купленные курсы</p>
		  <p>Курсы с пробным периодом</p>
		</div>
		<div class="profile_container">
		  <div class="profile_box">
			<courses-block/>
		  </div>
		  <div class="profile_box">
			<courses-block/>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</template>

<style scoped>
.profile_info {
  display:       flex;
  margin-bottom: 60px;
}

.profile_avatar {
  width:         295px;
  height:        295px;
  background:    #4F4F4F;
  border-radius: 50%;
}

.profile_text-block {
  align-self: center;
  width:      100%;

}

.profile_name {
  font-weight:   700;
  line-height:   26px;
  font-family:   "bold";
  text-align:    center;
  margin-bottom: 56px;
}

.profile_email {
  font-family: "bold";
  font-size:   20px;
  font-weight: 700;
  line-height: 24px;
  text-align:  center;
}

.profile_courses-text{
  display: flex;
  justify-content: space-evenly;
}

.profile_courses-text p{
  color: rgb(0, 0, 0);
  font-family: "regular";
  font-size: 20px;
  font-weight: 400;
  line-height: 100px;
  text-align: center;
  height: 100px;
}

.profile_container {
  display: flex;
  justify-content: center;
  gap:     20px;

}
</style>