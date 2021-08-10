import dashboard from './components/admin/Dashboard.vue';
import category from './components/admin/category/Category.vue';
import categoryAdd from "./components/admin/category/Add.vue";
import categoryEdit from "./components/admin/category/Edit.vue";
import module from "./components/admin/module/List.vue";
import moduleAdd from "./components/admin/module/Add.vue";
import moduleEdit from "./components/admin/module/Edit.vue";

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
    },
    {
        path: '/edit_category/:categoryId',
        component: categoryEdit
    },
    //Module Route
    {
        path: '/module',
        component: module
    },
    {
        path: '/add_module',
        component: moduleAdd
    },
    {
        path: '/edit_module/:moduleId',
        component: moduleEdit
    }
]