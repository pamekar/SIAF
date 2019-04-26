import VueRouter from 'vue-router';
import NProgress from './uiux/js/nprogress.js'
import Dashboard from './views/Dashboard.vue'
const Error404 = {
    beforeRouteEnter(to, from, next) {
        window.location('/user/error/404');
    },
};
const routes = [
    {
        path:      '/home',
        name:      'home',
        component: {
            beforeRouteEnter(to, from, next) {
                window.location = '/home';
            }
        }
    },
    {
        path:      '/user',
        name:      'dashboard',
        component: Dashboard
    },
];

const router = new VueRouter({
    mode: 'history',
    routes
});

// drg >> start progress bar before route request
router.beforeResolve((to, from, next) => {
    if (to.name) {
        NProgress.start();
    }
    next()
});

// drg >> end progress bar after route response
router.afterEach((to, from) => {
    NProgress.done();
});

export default router;