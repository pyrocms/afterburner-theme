import Vue from "vue";

Vue.component('toaster', Toaster);

const app = new Vue({
    el: '#app'
});

const Mousetrap = require('mousetrap');

require('./theme/tabs')
