import dashboard from './components/admin/Dashboard.vue';
import category from './components/admin/category/Category.vue';
import categoryAdd from "./components/admin/category/Add.vue";
import categoryEdit from "./components/admin/category/Edit.vue";
import module from "./components/admin/module/List.vue";
import moduleAdd from "./components/admin/module/Add.vue";
import moduleEdit from "./components/admin/module/Edit.vue";
import permission from "./components/admin/permission/list.vue";
import permissionAdd from "./components/admin/permission/Add.vue";
import permissionEdit from "./components/admin/permission/Edit.vue";

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
    },
    //Permission Route
    {
        path: '/permission',
        component: permission
    },
    {
        path: '/add_permission',
        component: permissionAdd
    },
    {
        path: '/edit_permission/:permissionId',
        component: permissionEdit
    }

]