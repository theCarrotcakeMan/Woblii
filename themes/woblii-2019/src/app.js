/**
 * Load main js resources
 * @version 1.4.2
 * @miniversion 1.24.0
 * @author John Falcon for Woblii
 * Let's do this together
 */

import Vue from 'vue';

Vue.component('home-tabs', require('../js/components/homeTabs.vue').default);
//
var VueResource = require('vue-resource');
Vue.use(VueResource);

var app = new Vue({
    el: '#app',
    data: {
        message: 'You loaded this page on ' + new Date().toLocaleString()
    }
});

