export default {
    state: {
        category: [],
    },
    getters: {
        categoryList(state) {
            return state.category
        }
    },
    actions: {
        getCategoryList(context) {
            axios.get('category')
                .then((response) => {
                    context.commit('categoryList', response.data.categoryList)
                })
        },
    },
    mutations: {
        categoryList(state, response) {
            return state.category = response
        }
    }
}