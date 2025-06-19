<script>
export default {
	props: {
		course: {
			type:     Array,
			required: true
		}
	},

	setup(props) {

		return {}
	}
}

</script>

<template>
		<div class="courses_block">
			<div class="courses_programs">
				<a>Программа</a>
			</div>
			<div class="courses_level">
				<p>{{ course.level }}</p>
			</div>
			<div class="courses_text">
				<p>
					{{ course.text }}
				</p>
			</div>
		</div>
</template>

<style scoped>

.courses_block {
	width:         calc(100% - 40px);
	max-width:     402px;
	height:        auto;
	min-height:    250px;
	margin-top:    38px;
	border-radius: 20px;
	background:    rgb(184, 239, 207);
	padding:       28px;
	box-sizing:    border-box;
}

.courses_programs {
	margin-bottom: 15px;
}

.courses_level {
	margin-bottom: 15px;
}

.courses_text p {
	line-height: 1.5;
}

@media screen and (max-width: 768px) {
	.courses {
		min-height: 320px;
		padding:    15px;
	}

	.courses_block {
		width:      calc(100% - 30px);
		margin-top: 20px;
		padding:    20px;
	}
}

@media screen and (max-width: 480px) {
	.courses {
		min-height: 280px;
		padding:    10px;
	}

	.courses_block {
		width:      calc(100% - 20px);
		margin-top: 15px;
		padding:    15px;
	}

	.courses_programs a {
		font-size: 16px;
	}

	.courses_level p {
		font-size: 14px;
	}

	.courses_text p {
		font-size: 14px;
	}
}
</style>