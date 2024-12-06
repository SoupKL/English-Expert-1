import {createRouter, createWebHistory} from 'vue-router'
import mainPage from "@/views/MainPage.vue";
import AllCourses from "@/views/AllCourses.vue";
import LogInLogOut from "@/views/LogInLogOut.vue";
import CoursesPage from "@/views/CoursesPage.vue";
import Events from "@/views/Events.vue";

const routes = [
		{
				path: '/',
				name: 'home',
				component: mainPage
		},
		{
				path: '/all-courses',
				name: 'all-courses',
				component: AllCourses
		},
		{
				path: '/auth',
				name: 'LogInLogOut',
				component: LogInLogOut
		},
		{
				path: '/course/:numdber',
				name: 'Course',
				component: CoursesPage
		},
		{
				path: '/events',
				name: 'Events',
				component: Events
		},
]

const router = createRouter({
		history: createWebHistory(),
		routes
})

export default router
