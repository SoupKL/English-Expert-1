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

<style lang="scss" scoped>
$profile-avatar-size: 295px;
$profile-avatar-bg: #4F4F4F;
$profile-name-font: "bold";
$profile-email-font: "bold";
$profile-email-size: 20px;
$profile-email-weight: 700;
$profile-email-line: 24px;
$profile-courses-text-font: "regular";
$profile-courses-text-size: 20px;
$profile-courses-text-line: 100px;

.profile_info {
  display: flex;
  margin-bottom: 60px;

  .profile_avatar {
    width: $profile-avatar-size;
    height: $profile-avatar-size;
    background: $profile-avatar-bg;
    border-radius: 50%;
  }

  .profile_text-block {
    align-self: center;
    width: 100%;

    .profile_name {
      font-weight: 700;
      line-height: 26px;
      font-family: $profile-name-font;
      text-align: center;
      margin-bottom: 56px;
    }

    .profile_email {
      font-family: $profile-email-font;
      font-size: $profile-email-size;
      font-weight: $profile-email-weight;
      line-height: $profile-email-line;
      text-align: center;
    }
  }
}

.profile_courses-text {
  display: flex;
  justify-content: space-evenly;

  p {
    color: rgb(0, 0, 0);
    font-family: $profile-courses-text-font;
    font-size: $profile-courses-text-size;
    font-weight: 400;
    line-height: $profile-courses-text-line;
    text-align: center;
    height: 100px;
  }
}

.profile_container {
  display: flex;
  justify-content: center;
  gap: 20px;
}
</style>