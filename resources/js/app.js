/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// import Router from "vue";
// import Vue from 'vue'
// Vue.use(VueRouter);
// Vue.use(Router)

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("juancito", require("./components/juancito.vue").default);
Vue.component(
    "header-component",
    require("./components/HeaderComponent.vue").default
);
Vue.component(
    "searchbar-component",
    require("./components/SearchBar.vue").default
);
Vue.component(
    "home-component",
    require("./components/HomeComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// import HeaderComponent from "./components/HeaderComponent";
// import ExampleComponent from "./components/ExampleComponent";
// import juancito from "./components/juancito";

// const router = new Router({
//     mode: "history",
//     routes: [
//         { path: "/", name:'header',component: HeaderComponent },
//         { path: "/algo",name:'example', component: ExampleComponent }
//     ]
// });
const app = new Vue({
    el: "#app"
    // components:{juancito},
    // router
});
