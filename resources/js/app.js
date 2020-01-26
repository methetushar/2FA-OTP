

require('./bootstrap');

window.Vue = require('vue');
import router from "./Router";

const app = new Vue({
    el: '#app',
    router
});
