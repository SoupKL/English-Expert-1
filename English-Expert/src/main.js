import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'


import router from './router'
import TestComponent from './components/test-component/test-component.vue'
import MainPage from './main-page.vue'

const app = createApp(MainPage)

app.use(createPinia())
app.use(router)

app.mount('#app')

export default {
    components: {
        TestComponent,
    }
}
