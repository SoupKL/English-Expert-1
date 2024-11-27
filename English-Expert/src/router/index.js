import { createRouter, createWebHistory } from 'vue-router'
import {defineAsyncComponent} from "vue";
import mainPage from "@/views/MainPage.vue";
import AllCourses from "@/views/AllCourses.vue";

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
    name: 'AuthPage',
    component: () => defineAsyncComponent(() => import('@/views/AuthPage.vue'))
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
