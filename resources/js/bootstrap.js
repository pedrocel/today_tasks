import Vue from 'vue';

import axios from 'axios';

import Form from './utils/Form';
import Errors from './utils/Errors';

import VueMask from "v-mask"


import AOS from 'aos';
import 'aos/dist/aos.css';

import VueToast from 'vue-toast-notification';
import VueScrollTo from 'vue-scrollto';
import Router from 'vue-router';
// Import one of the available themes
//import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(VueToast);
Vue.use(VueMask);
Vue.use(VueScrollTo);
Vue.use(Router);
//Vue.$toast.open({/* options */});
// let instance = Vue.$toast.open('You did it!');

// Force dismiss specific toast
// instance.dismiss();
// Dismiss all opened toast immediately


window._ = require('lodash');

Vue.prototype.$rota = 'http://192.168.5.10/';
window.Vue = Vue;

window.axios = axios;

window.Form = Form;
window.Errors = Errors;
window.AOS = AOS;

export const ModalBus = new Vue()

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
