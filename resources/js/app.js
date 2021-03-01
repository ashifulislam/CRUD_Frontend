/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';

import swal from 'sweetalert2'

import Vue from 'vue'
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})
window.toast = toast;

window.Fire=new Vue();
window.Form= Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


//Registered vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
let routes = [

    { path: '/products', component: require('./components/products.vue').default },
    { path: '/example_component', component: require('./components/ExampleComponent.vue').default },
    // { path: '/createAgentProfile', component: require('./components/CreateAgentProfile.vue').default },

    // { path: 'Message', component: require('./components/Message.vue').default },

]
//registered routes
const router = new VueRouter({

    routes // short for `routes: routes`
})

const app = new Vue({
    el: '#pcoded',
    router,
});
