import Vue from "vue";
import Router from "vue-router";
import HomeRoutes from "./home";
// import checkAuth from "../middlewares/checkAuth";
// const isAuthenticated = true;

Vue.use(Router);

const routes = [...HomeRoutes];

let router = new Router({
  mode: "history",
  routes: routes,
  linkExactActiveClass: "active",
  scrollBehavior: function (to, from, savedPosition) {
    return savedPosition || { x: 0, y: 0 };
  },
});

// router.beforeEach((to, from, next) => {
//   checkAuth(next, isAuthenticated);
// });

export default router;
