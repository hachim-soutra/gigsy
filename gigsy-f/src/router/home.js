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
    path: "/categories/illus-services",
    name: "illus-services",
    component: () => import(`@v/categories/illus-services.vue`),
  },
  {
    path: "/categories/trad-services",
    name: "trad-services",
    component: () => import(`@v/categories/trad-services.vue`),
  },
  {
    path: "/categories/sais-services",
    name: "sais-services",
    component: () => import(`@v/categories/sais-services.vue`),
  },
  {
    path: "/categories/couv-services",
    name: "couv-services",
    component: () => import(`@v/categories/couv-services.vue`),
  },
  {
    path: "/categories/logo-services",
    name: "logo-services",
    component: () => import(`@v/categories/logo-services.vue`),
  },
  {
    path: "/categories/wp-services",
    name: "wp-services",
    component: () => import(`@v/categories/wp-services.vue`),
  },
  {
    path: "/categories/voix-services",
    name: "voix-services",
    component: () => import(`@v/categories/voix-services.vue`),
  },
  {
    path: "/categories/video-services",
    name: "video-services",
    component: () => import(`@v/categories/video-services.vue`),
  },
  {
    path: "/categories/sm-services",
    name: "sm-services",
    component: () => import(`@v/categories/sm-services.vue`),
  },
  {
    path: "/categories/gigs-details",
    name: "gigs-details",
    component: () => import(`@v/categories/gigs-details.vue`),
  },
];

export default routes;
