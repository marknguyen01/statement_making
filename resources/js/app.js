
import Vue from 'vue';
import 'animate.css';
import VueFullpage from 'fullpage-vue';
import VueGlide from 'vue-glide-js';
import 'vue-glide-js/dist/vue-glide.css';
import VueAnime from 'vue-animejs';


Vue.use(VueFullpage);
Vue.use(VueGlide);
Vue.use(VueAnime);

Vue.component('home', require('./components/LayoutComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
