import dashboard from './components/admin/Dashboard.vue';
import category from './components/admin/category/Category.vue';

export const routes = [{
        path: '/',
        component: dashboard
    },
    {
        path: '/category',
        component: category
    }
]