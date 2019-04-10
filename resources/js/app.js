
import Vue from 'vue';
import 'animate.css';
import VueFullpage from 'fullpage-vue';
import VueCarousel from 'vue-carousel';

Vue.use(VueFullpage)
Vue.use(VueCarousel);

Vue.component('home', require('./components/HomeComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
