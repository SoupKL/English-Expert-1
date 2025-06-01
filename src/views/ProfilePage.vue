<script setup>
import { ref, onMounted } from 'vue'
import { useUserStore } from '@/stores/userStore'
import CoursesBlock from '@/components/courses-block/courses-block.vue'
import ErrorPage from '@/views/ErrorPage.vue'

const userStore = useUserStore()
const acquiredCourses = ref([])
const trialCourses = ref([])
const hasError = ref(false)
const loading = ref(true)

const loadCourses = async () => {
	try {
		const res = await fetch(`https://laravel-api-gmjs.onrender.com/api/users/${userStore.user.id}/course-status`, {
			headers: {
				Authorization: `Bearer ${userStore.token}`,
				Accept: 'application/json',
			},
		})

		if (!res.ok) throw new Error('Ошибка загрузки курсов')

		const data = await res.json()
		acquiredCourses.value = data.acquired || []
		trialCourses.value = data.trial || []
	} catch (e) {
		console.error('Ошибка:', e)
		hasError.value = true
	} finally {
		loading.value = false
	}
}

onMounted(() => {
	if (!userStore.user) {
		hasError.value = true
		loading.value = false
	} else {
		loadCourses()
	}
})
</script>

<template>
	<div class="wrapper">
		<div class="profile">
			<div class="profile_info">
				<img class="profile_avatar" src="../assets/logo.svg" />
				<div class="profile_text-block">
					<div class="profile_name">
						{{ userStore.user?.name }}
					</div>
					<div class="profile_email">
						{{ userStore.user?.login }}
					</div>
				</div>
			</div>

			<div class="profile_courses">
				<div class="profile_courses-text">
					<p>Купленные курсы</p>
				</div>

				<div class="profile_container">
					<div class="profile_box">
						<courses-block :courses="acquiredCourses" />
					</div>
				</div>

				<p v-if="error" class="error">{{ error }}</p>
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

.wrapper {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

.profile_info {
	display: flex;
	margin-bottom: 60px;
	flex-wrap: wrap;
	gap: 20px;

	.profile_avatar {
		width: $profile-avatar-size;
		height: $profile-avatar-size;
		background: $profile-avatar-bg;
		border-radius: 50%;
		object-fit: cover;
	}

	.profile_text-block {
		align-self: center;
		width: 100%;
		max-width: 500px;

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
	justify-content: center;
	margin-bottom: 20px;

	p {
		color: rgb(0, 0, 0);
		font-family: $profile-courses-text-font;
		font-size: $profile-courses-text-size;
		font-weight: 400;
		line-height: $profile-courses-text-line;
		text-align: center;
	}
}

.profile_container {
	display: flex;
	justify-content: center;
	max-width: 800px;
	margin: 0 auto;
}

// Media Queries
@media screen and (max-width: 1024px) {
	.profile_info {
		justify-content: center;

		.profile_avatar {
			width: 250px;
			height: 250px;
		}
	}
}

@media screen and (max-width: 768px) {
	.profile_info {
		.profile_avatar {
			width: 200px;
			height: 200px;
		}

		.profile_text-block {
			.profile_name {
				margin-bottom: 30px;
			}
		}
	}

	.profile_courses-text {
		p {
			font-size: 18px;
			line-height: 80px;
		}
	}
}

@media screen and (max-width: 480px) {
	.profile_info {
		.profile_avatar {
			width: 150px;
			height: 150px;
		}

		.profile_text-block {
			.profile_name {
				font-size: 20px;
				margin-bottom: 20px;
			}

			.profile_email {
				font-size: 16px;
			}
		}
	}

	.profile_courses-text {
		p {
			font-size: 16px;
			line-height: 60px;
		}
	}
}
</style>