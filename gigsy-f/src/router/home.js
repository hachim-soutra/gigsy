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
    path: "/services",
    name: "services",
    component: () => import(`@v/services/services.vue`),
  }, 
];

export default routes;
