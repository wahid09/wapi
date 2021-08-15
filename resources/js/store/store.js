export default {
    state: {
        category: [],
        module: [],
        permission: [],
        role: [],
    },
    getters: {
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