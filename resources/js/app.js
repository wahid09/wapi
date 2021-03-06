require('./bootstrap');
import axios from 'axios'
import VueAxios from 'vue-axios'
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

//Vue progressbar
import VueProgressBar from 'vue-progressbar'
const options = {
  color: '#bffaf3',
  failedColor: '#874b4b',
  thickness: '5px',
  transition: {
    speed: '0.2s',
    opacity: '0.6s',
    termination: 300
  },
  autoRevert: true,
  location: 'top',
  inverse: false
}

Vue.use(VueProgressBar, options)

//vue markdown editor

import 'v-markdown-editor/dist/v-markdown-editor.css';

import Editor from 'v-markdown-editor'
Vue.use(Editor);

//Token check

axios.default.withCredentials = true
axios.default.baseURL = 'http://127.0.0.1:8000/api/v1'
const token = localStorage.getItem('token')
if(token){
    axios.default.headers.common['Authorization'] = token
}

//Vue Router
import VueRouter from 'vue-router'
Vue.use(VueAxios, axios)
Vue.use(VueRouter)

import { routes } from './routes'
import Axios from 'axios';
import Vue from 'vue';
const router = new VueRouter({
    //mode: 'history',
    routes // short for `routes: routes`
})
Vue.component('login', require('./components/admin/login.vue').default);
Vue.component('admin-master', require('./components/admin/AdminMaster.vue').default);




const app = new Vue({
    el: '#app',
    router,
    store
});
