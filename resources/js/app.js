require('./bootstrap');

import Vue from 'vue'

Vue.component('initial',require('./components/initialComponent.vue').default);
const app = new Vue({
    el:'#app'
});
