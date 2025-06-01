import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './app.vue'
import router from './router'
import { useUserStore } from '@/stores/userStore'

const app = createApp(App)
const pinia = createPinia()

app.use(pinia)

const userStore = useUserStore()
userStore.initFromStorage()
userStore.validateToken() // ✅ здесь вызываем проверку токена

app.use(router)
app.mount('#app')
