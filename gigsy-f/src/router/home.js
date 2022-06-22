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
  {
    path: "/categories/seo-services",
    name: "seo-services",
    component: () => import(`@v/categories/seo-services.vue`),
  }, 
  {
    path: "/profil",
    name: "profil",
    component: () => import(`@v/Profil/Profil.vue`),
  }, 
];

export default routes;
