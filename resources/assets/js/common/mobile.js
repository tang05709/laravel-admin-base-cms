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
      { path: '/mobile/' },
      { path: '/mobile/pages/:category?', name: "pages" },
      { path: '/mobile/products/:category?', name: 'products' },
      { path: '/mobile/product/:id', name: 'product' },
      { path: '/mobile/articles/:category?', name: 'articles' },
      { path: '/mobile/article/:id', name: 'article' },
      { path: '/mobile/jobs/:category', name: 'jobs' }
    ]
})



Vue.component('header-box', require('../components/mobile/Header.vue'));
Vue.component('footer-box', require('../components/mobile/Footer.vue'));
Vue.component('article-list', require('../components/mobile/ArticleList.vue'));
Vue.component('product-list', require('../components/mobile/ProductList.vue'));
Vue.component('page-show', require('../components/mobile/PageShow.vue'));

new Vue({
    el: '#app',
    router,
});
