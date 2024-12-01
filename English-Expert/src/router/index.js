import { createRouter, createWebHistory } from 'vue-router'
import mainPage from "@/views/MainPage.vue";
import AllCourses from "@/views/AllCourses.vue";
import LogInLogOut from "@/views/LogInLogOut.vue";

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
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
