//import { axios } from "vue/types/umd"
import axios from "axios"

export default {
    state: {
        status:'',
        token: localStorage.getItem('token') || '',
        user: {},
        error: '',
        category: [],
        module: [],
        permission: [],
        role: [],
    },
    getters: {
        isLoggedIn: state => !!state.token,
        authStatus: state => state.status,
        getError: state => state.error,
        categoryList(state) {
            return state.category
        },
        moduleList(state) {
            return state.module
        },
        permissionList(state) {
            return state.permission
        },
        roleList(state) {
            return state.role
        }
    },
    actions: {
        login({commit}, user){
            return new Promise((resolve, reject)=>{
                commit('auth_request')
                axios({url: 'login', data: user, method: 'POST'})
                .then(resp=>{
                    const token = 'Bearer '+resp.data.data.access_token
                    const user = resp.data.data.user
                    localStorage.setItem('token', token)
                    axios.defaults.headers.common['Authorization'] = token
                    commit('auth_success', token, user)
                    commit('set_user', user)
                    commit('handle_error', '')
                    console.log('hi')
                    resolve(resp)
                })
                .catch(err=>{
                    localStorage.removeItem('token')
                    reject(err)
                })
            })
        },
        getCategoryList(context) {
            axios.get('api/v1/category')
                .then((response) => {
                    context.commit('categoryList', response.data.data)
                })
        },
        getModuleList(context) {
            axios.get('api/v1/module').then((response) => {
                context.commit('moduleList', response.data.data)
            })
        },
        getPermissionList(context) {
            axios.get('api/v1/permission').then((response) => {
                context.commit('permissionList', response.data.data)
            })
        },
        getRoleList(context) {
            axios.get('api/v1/role').then((response) => {
                context.commit('roleList', response.data.data)
            })
        }
    },
    mutations: {
        auth_request(state){
            state.status = 'loading'
        },
        auth_success(state, token){
            state.status = 'success'
            state.token = token
        },
        set_user(state, user){
            state.user = user
        },
        handle_error(state, error){
            state.error = error
        },
        logout(state){
            state.status = ''
            state.token = ''
        },
        categoryList(state, response) {
            return state.category = response
        },
        moduleList(state, response) {
            return state.module = response
        },
        permissionList(state, response) {
            return state.permission = response
        },
        roleList(state, response) {
            return state.role = response
        }
    }
}