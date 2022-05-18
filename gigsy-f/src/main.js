import Vue from "vue";
import App from "./App.vue";
import store from "./store/index";
import router from "./router";
// PROJECT: COMMONS
import development from "@/config/development.json";
import production from "@/config/production.json";
// register the plugin on vue
import Toasted from "vue-toasted";

// Importing the global css file
import "@/assets/css/global.css";

Vue.config.productionTip = false;
if (process.env.NODE_ENV === "production") {
  Vue.prototype.$config = Object.freeze(production);
} else {
  Vue.prototype.$config = Object.freeze(development);
}

Vue.prototype.$app_url = Vue.prototype.$config.app_url;

Vue.use(Toasted);

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
