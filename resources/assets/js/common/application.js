require('../bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    mode: 'history',
    routes: [
      { path: '/' },
      { path: '/pages/:category?', name: "pages" },
      { path: '/products/:category?', name: 'products' },
      { path: '/product/:id', name: 'product' },
      { path: '/articles/:category?', name: 'articles' },
      { path: '/article/:id', name: 'article' },
      { path: '/jobs/:category', name: 'jobs' }
    ]
})



Vue.component('header-box', require('../components/Header.vue'));
Vue.component('footer-box', require('../components/Footer.vue'));
Vue.component('article-list', require('../components/ArticleList.vue'));
Vue.component('product-list', require('../components/ProductList.vue'));
Vue.component('page-show', require('../components/PageShow.vue'));

new Vue({
    el: '#app',
    router,
});
