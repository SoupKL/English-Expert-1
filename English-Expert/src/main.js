import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './router'
import App from './App.vue' // Корневой компонент
import VueCreditCardValidation from 'vue-credit-card-validation';


const app = createApp(App)

// Подключаем Pinia и роутер
app.use(createPinia())
app.use(router)
app.use(VueCreditCardValidation);
// Монтируем приложение
app.mount('#app')
