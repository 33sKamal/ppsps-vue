import { createApp } from 'vue'
import App from './App.vue'
import store from './components/store/store'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';


createApp(App)
.use(VueSweetalert2)
.use(store)
.mount('#app')
