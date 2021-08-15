export default {
    state: {
        category: [],
        module: [],
        permission: [],
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
                context.commit('permissionList', response.data.permissionList)
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
        }
    }
}