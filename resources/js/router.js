import Vue from 'vue';
import VueRouter from 'vue-router';
import HomePage from './pages/HomePage.vue';
import NotFound from './pages/NotFound.vue';
import PaymentPage from './pages/PaymentPage.vue';
import SingleUser from './pages/SingleUser.vue';
import AboutUs from './pages/AboutUs.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/restaurant/:slug',
            name: 'single-user',
            component: SingleUser,
        },
        {
            path: '/about',
            name: 'AboutUs',
            component: AboutUs,
        },
        {
            path: '/restaurant/:slug/payment',
            name: 'payment',
            component: PaymentPage,
            props: true
        },
        {
            path: '/*',
            name: 'not-found',
            component: NotFound
        },

    ]
});

export default router;