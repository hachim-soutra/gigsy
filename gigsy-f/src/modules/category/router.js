const routesModule = {
  path: "/categories",
  name: "categories",
  component: () => import(`./Module.vue`),
  children: [],
};
export default (routes) => {
  routes.addRoutes([routesModule]);
};
