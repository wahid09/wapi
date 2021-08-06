require('./bootstrap');

window.Vue = require('vue');
//import { Forn, HasError, AlertError } from 'vform'
import Form from 'vform'
window.Form = Form;

//Vuex For state maganement
import Vuex from 'vuex'
Vue.use(Vuex)
import storeInfo from './store/store';

const store = new Vuex.Store(
    storeInfo
)

//Sweet alert support
import Swal from 'sweetalert2'
window.Swal = Swal

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.Toast = Toast

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import { routes } from './routes'



const router = new VueRouter({
    //mode: 'history',
    routes // short for `routes: routes`
})

Vue.component('admin-master', require('./components/admin/AdminMaster.vue').default);




const app = new Vue({
    el: '#app',
    router,
    store
});