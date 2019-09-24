import Vue from "vue";
import Toaster from "./components/Messages.vue";

Vue.component('toaster', Toaster);

const app = new Vue({
    el: '#app'
});

const Mousetrap = require('mousetrap');
