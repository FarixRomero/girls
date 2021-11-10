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

// import VueRouter from "vue-router";
// Vue.use(VueRouter);

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

Vue.component("profile-component", require("./components/Profile.vue").default);
Vue.component("anuncio-component", require("./components/Anuncio.vue").default);
Vue.component("footer-component", require("./components/Footer.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// import HeaderComponent from "./components/HeaderComponent";
// import Profile from "./components/Profile";
// import HomeComponent from "./components/HomeComponent";

// const router = new VueRouter({
//     mode: "history",
//     routes: [
//         { path: "/", component: HeaderComponent },
//         { path: "/algo", component: Profile }
//     ]
// });
const app = new Vue({
    el: "#app"
    // components: { HomeComponent },
    // router
});
