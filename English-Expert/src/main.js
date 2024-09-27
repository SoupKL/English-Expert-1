import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './router'
import App from './App.vue' // Корневой компонент

const app = createApp(App)

// Подключаем Pinia и роутер
app.use(createPinia())
app.use(router)

// Монтируем приложение
app.mount('#app')
