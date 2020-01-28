import Vue from 'vue'
import Router from 'vue-router'

import Login from '@views/Login.vue'
// Container Admin
import Admin from '@views/Admin.vue'
// Panel
import Panel from '@views/Panel.vue'
// Module user
import User from '@views/user/Index.vue'
import UserList from '@views/user/List.vue'
import UserCreate from '@views/user/Create.vue'

Vue.use(Router);

export default new Router({
  routes: [
    {
        path: '/',
        name: 'index_path',
        redirect: { name: 'login_path' }
    },
    {
        path: '/login',
        name: 'login_path',
        component: Login
    },
    {
        path: '/app',
        component: Admin,
        children: [
            {
                path: 'panel',
                name: 'panel_path',
                component: Panel
            },
            {
                path: '/user',
                component: User,
                children: [
                    {
                        path: '/',
                        name: 'user_index_path',
                        component: UserList
                    },
                    {
                        path: 'create',
                        name: 'user_create_path',
                        component: UserCreate
                    }
                ]
            }
        ]
    }
  ]
});
