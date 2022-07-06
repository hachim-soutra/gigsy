import Vue from "vue";
import App from "./App.vue";
import store from "./store/index";
import router from "./router";
// PROJECT: COMMONS
import development from "@/config/development.json";
import production from "@/config/production.json";
// register the plugin on vue
import Toasted from "vue-toasted";

import ApiService from "./services/api.service";

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
ApiService.init();

Vue.component("loader", require("../src/components/Loader.vue").default);
import VueSkeletonLoader from "skeleton-loader-vue";
Vue.component("vue-skeleton-loader", VueSkeletonLoader);

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
