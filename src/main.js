import {createApp} from 'vue'
import {createPinia} from 'pinia'
import router from './router'
import App from './app.vue'
import VueCreditCardValidation from 'vue-credit-card-validation'
import {useUserStore} from '@/stores/userStore.js'

const app   = createApp(App)
const pinia = createPinia()

app.use(pinia) // ✅ сначала активируем Pinia
app.use(router)
app.use(VueCreditCardValidation)

// ✅ теперь можно использовать store
const userStore = useUserStore()
userStore.fetchUser()

app.mount('#app')
