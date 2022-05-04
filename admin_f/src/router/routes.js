import dashboardPage from '../views/DashboardPage.vue';

const login = () =>
    import ('../views/auth/loginUser.vue');
const register = () =>
    import ('../views/auth/registerUser.vue');
const notFound = () =>
    import ('../views/errors/notFound.vue');
const usersList = () =>
    import ('../views/users/UsersList.vue');

const routes = [{
        path: '/',
        name: 'defaultPath',
        redirect: { name: 'dashboard' },
        meta: { requiresAuth: true }
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: dashboardPage,
        meta: { requiresAuth: true }
    },
    {
        path: '/auth/login',
        name: 'login',
        component: login,
        meta: { requiresUnauth: true }
    },
    {
        path: '/auth/register',
        name: 'register',
        component: register,
        meta: { requiresUnauth: true }
    },
    {
        path: '/:notFound(.*)',
        component: notFound
    },
    {
        path: '/users',
        name: 'users',
        component: usersList,
        meta: { requiresAuth: true }
    }
]
export default routes