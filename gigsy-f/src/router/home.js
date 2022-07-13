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
    path: "/profil",
    name: "profil",
    component: () => import(`@v/Profil/Profil.vue`),
  },
  {
    path: "/update-profil",
    name: "update.profil",
    component: () => import(`@v/Profil/UpdateProfil.vue`),
  },
  {
    path: "/my-services",
    name: "service.profil",
    component: () => import(`@v/Profil/MyService.vue`),
  },
  {
    path: "/credit",
    name: "credit.profil",
    component: () => import(`@v/Profil/Credit.vue`),
  },
  {
    path: "/notifications",
    name: "notifications.profil",
    component: () => import(`@v/Profil/Notification.vue`),
  },
  {
    path: "/cart",
    name: "cart.profil",
    component: () => import(`@v/Profil/Cart.vue`),
  },
  {
    path: "/messages",
    name: "messages.profil",
    component: () => import(`@v/Profil/Messages.vue`),
  },
  {
    path: "/categories/:slug",
    name: "category",
    component: () => import(`@v/categories/pages/Category.vue`),
  },
  {
    path: "/gigs/:slug",
    name: "gigs",
    component: () => import(`@v/gigs/pages/GigsDetails.vue`),
  },
];

export default routes;
