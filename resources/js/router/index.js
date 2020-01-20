import Vue from 'vue'
import Router from 'vue-router'

import Login from '@views/Login.vue'

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
        children: [
            {
                path: 'panel',
                name: 'panel_path',
                component: { template: 'Hola mundo' }
            }
        ]
    }
  ]
});
