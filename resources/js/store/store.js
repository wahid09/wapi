export default {
    state: {
        category: [],
        module: [],
    },
    getters: {
        categoryList(state) {
            return state.category
        },
        moduleList(state) {
            return state.module
        }
    },
    actions: {
        getCategoryList(context) {
            axios.get('category')
                .then((response) => {
                    context.commit('categoryList', response.data.categoryList)
                })
        },
        getModuleList(context) {
            axios.get('api/v1/module').then((response) => {
                context.commit('moduleList', response.data.moduleList)
            })
        }
    },
    mutations: {
        categoryList(state, response) {
            return state.category = response
        },
        moduleList(state, response) {
            return state.module = response
        }
    }
}