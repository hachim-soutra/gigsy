import Vue from "vue";
import VueRouter from "vue-router";
import homeRoutes from "./home.js";

Vue.use(VueRouter);
const router = new VueRouter({
  routes: [...homeRoutes],
  mode: "history",
});
export default router;
