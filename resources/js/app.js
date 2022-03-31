require('./bootstrap');
window.Vue = require('vue')

import { createApp } from 'vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import router from './routes';

import App from './components/App.vue';

createApp(App)
    .use(VueAxios, axios)
    .use(router)
    .mount('#app');

