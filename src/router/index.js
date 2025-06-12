import {createRouter, createWebHistory} from 'vue-router'

// Lazy load views to reduce initial bundle size
const mainPage = () => import('@/views/MainPage.vue')
const AllCourses = () => import('@/views/AllCourses.vue')
const LogInLogOut = () => import('@/views/LogInLogOut.vue')
const CoursesPage = () => import('@/views/CoursesPage.vue')
const Events = () => import('@/views/Events.vue')
const new_1 = () => import('@/components/new1/new_1.vue')
const NotFound = () => import('@/views/NotFound.vue')
const TestPage = () => import('@/views/TestPage.vue')
const ProfilePage = () => import('@/views/ProfilePage.vue')

const routes = [
	{
		path:      '/',
		name:      'home',
		component: mainPage
	},
	{
		path:      '/all-courses',
		name:      'all-courses',
		component: AllCourses
	},
	{
		path:      '/auth',
		name:      'LogInLogOut',
		component: LogInLogOut
	},
	{
		path:      '/course/:numdber',
		name:      'Course',
		component: CoursesPage
	},
	{
		path:      '/events',
		name:      'Events',
		component: Events
	},
	{
		path:      '/test',
		name:      'Test',
		component: TestPage
	},
	{
		path:      '/news',
		name:      'News',
		component: new_1
	},
	{
		path:      '/profile',
		name:      'Profile',
		component: ProfilePage
	},
	{
		path:      '/:catchAll(.*)',
		name:      'NotFound',
		component: NotFound
	}
]

const router = createRouter({
	history: createWebHistory(),
	routes
})

export default router
