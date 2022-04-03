import Vue from "vue";
import Router from "vue-router";
import HomeRoutes from "./home";

Vue.use(Router);

const routes = [...HomeRoutes];

let router = new Router({
  mode: "history",
  routes: routes,
  linkExactActiveClass: "active",
  scrollBehavior: function(to, from, savedPosition) {
    return savedPosition || { x: 0, y: 0 };
  },
});
export default router;
