let routes = [
  {
    path: "/",
    name: "home",
    component: () => import(`@/views/Home/Home.vue`),
  },
  {
    path: "/login",
    name: "login",
    component: () => import(`@v/login/Login.vue`),
  },
  {
    path: "/register",
    name: "register",
    component: () => import(`@v/register/Register.vue`),
  },
  {
    path: "/forget-password",
    name: "forget",
    component: () => import(`@v/forget/Forget.vue`),
  },
  {
    path: "/categories",
    name: "categories",
    component: () => import(`@v/categories/pages/Categories.vue`),
  },
  {
    path: "/categories/:slug",
    name: "category",
    component: () => import(`@v/categories/pages/Category.vue`),
  },
];

export default routes;
