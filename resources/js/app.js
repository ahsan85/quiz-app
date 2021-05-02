require('./bootstrap');

require('alpinejs');


import Vue from 'vue'

//Main pages
import App from './vue/App'
import Subject from './vue/subjects/Subject'

const app = new Vue({
    el: '#app',
    components: { App,
    Subject
    }
});
