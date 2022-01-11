import { createApp } from 'vue'
import App from './App.vue'
import store from './components/store/store'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"
    
window.html2pdf = require("./js/html2pdf.js")
window.moment = require("moment")

createApp(App)
.use(VueSweetalert2)
.use(store)
.mount('#app')
