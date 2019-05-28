import VueRouter from 'vue-router';
import NProgress from './uiux/js/nprogress.js'
import Dashboard from './views/Dashboard.vue'
import Complaints from './views/Complaints.vue'
import ComplaintsMake from './views/ComplaintsMake.vue'
import ComplaintsView from './views/ComplaintsView.vue'
import Contribution from './views/Contribution.vue'
import ContributionHistory from './views/ContributionHistory.vue'
import ContributionMake from './views/ContributionMake.vue'
import Members from './views/Members.vue'
import Profile from './views/Profile.vue'
import Settings from './views/Settings.vue'

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
    {
        path:      '/user/complaints',
        name:      'complaints',
        component: Complaints
    },
    {
        path:      '/user/complaints/make',
        name:      'complaints-make',
        component: ComplaintsMake
    },
    {
        path:      '/user/complaints/view/:id',
        name:      'complaints-view',
        component: ComplaintsView
    },
    {
        path:      '/user/contribution',
        name:      'contribution',
        component: Contribution
    },
    {
        path:      '/user/contribution/history',
        name:      'contribution-history',
        component: ContributionHistory
    },
    {
        path:      '/user/contribution/make',
        name:      'contribution-make',
        component: ContributionMake
    },
    {
        path:      '/user/members',
        name:      'members',
        component: Members
    },
    {
        path:      '/user/profile',
        name:      'profile',
        component: Profile
    },
    {
        path:      '/user/settings',
        name:      'settings',
        component: Settings
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