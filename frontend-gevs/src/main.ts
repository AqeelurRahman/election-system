import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import router from './router'
import BootstrapVue3 from 'bootstrap-vue-3'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css'
import Colada, { PiniaColadaPlugin } from 'colada-plugin'

const app = createApp(App)
const pinia = createPinia()
app.use(pinia)
pinia.use(PiniaColadaPlugin)
app.use(Colada)
app.use(router)
// Use BootstrapVue
app.use(BootstrapVue3)
app.mount('#app')
