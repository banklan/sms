/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import App from './components/App';

import vuetify from './plugins/vuetify';

import VueRouter from 'vue-router';

import Routes from './router/routes';

import { store } from './store/index';

import './filters';

import VeeValidate from 'vee-validate';

import Moment from 'vue-moment'

import 'animate.css'

import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'


// initialize plugins
Vue.use(VueRouter)
Vue.use(VeeValidate)
Vue.use(Moment)

const router = new VueRouter({
    routes: Routes,
    mode: 'history',
    linkActiveClass: 'font-semibold'
})



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('UsersLoginNavDd', require('./components/navbars/UsersLoginNavDd.vue').default);
Vue.component('Footer', require('./components/includes/Footer.vue').default);
Vue.component('WelcomeBanner', require('./components/general/WelcomeBanner.vue').default);
Vue.component('WhyChooseUs', require('./components/general/WhyChooseUs.vue').default);
Vue.component('LoginPortals', require('./components/general/LoginPortals.vue').default);
Vue.component('FourEasySteps', require('./components/general/FourEasySteps.vue').default);
Vue.component('Testimonials', require('./components/general/Testimonials.vue').default);
Vue.component('FindSchool', require('./components/general/FindSchool.vue').default);
Vue.component('OurPartners', require('./components/general/OurPartners.vue').default);
Vue.component('SchoolAdminLanding', require('./components/general/SchoolAdminLanding.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    vuetify,
    store
});
