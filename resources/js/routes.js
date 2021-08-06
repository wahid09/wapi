import dashboard from './components/admin/Dashboard.vue';
import category from './components/admin/category/Category.vue';
import categoryAdd from "./components/admin/category/Add.vue";

export const routes = [{
        path: '/',
        component: dashboard
    },
    {
        path: '/category',
        component: category
    },
    {
        path: '/add_category',
        component: categoryAdd
    }
]