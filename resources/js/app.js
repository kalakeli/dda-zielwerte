/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 window.API_URL = 'http://localhost:8000';
 window.Vue = require('vue');

 require('./bootstrap');


 window.Vue = require('vue');
 import VueRouter from 'vue-router'

 Vue.use(VueRouter)


// ------------------------------------------------ EVENTBUS ------------------
Vue.prototype.$eventBus = new Vue();
// --------------------------------------------------------
// import SWEEETALERT to manipulate modal messages and make it globally available
import swal from 'sweetalert2'
window.Swal = swal;
require('./sweetalerts');


// --------------------------------------------------------
// import ROUTES
let routes = [
  { path: '/home', name: 'startpage', component:  require('./components/Introduction.vue').default },
  { path: '/material', name: 'material', component:  require('./components/Downloads.vue').default },
]

const router = new VueRouter({
  // mode: 'history',
  routes
})

const app = new Vue({
  router
}).$mount('#app')
