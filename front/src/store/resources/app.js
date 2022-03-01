require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('posts', require('./components/Posts.vue'))
Vue.component('createPost', require('./components/CreatePost.vue'))

const app = new Vue({
    el: '#app',
    store
}); 