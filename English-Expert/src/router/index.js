import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import AuthPage from '@/views/AuthPage.vue'
import {defineAsyncComponent} from "vue";

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('@/views/AboutView.vue')
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
