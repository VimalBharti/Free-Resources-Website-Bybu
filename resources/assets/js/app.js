require('./bootstrap');

import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

// let userdashboardSidebar = require('./components/userdashboardSidebar.vue');
// let Preloader = require('./components/Preloader.vue');
import Login from './pages/login'


const app = new Vue({
    el: '#app',
    data: {
      message: 'bybu',
      preview: false,
    },
    components:{
      // Preloader
      Login,
    }
});
