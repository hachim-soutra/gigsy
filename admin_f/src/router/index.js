import { createRouter, createWebHistory } from 'vue-router'
import routes from './routes'
import store from '../store/index'

const router = createRouter({
    history: createWebHistory(),
    routes
})

//Auth
router.beforeEach(function(to, _, next) {
    if (to.meta.requiresAuth && !store.getters.isAuthenticated) {
        next({ name: 'login' });
    } else if (to.meta.requiresUnauth && store.getters.isAuthenticated) {
        next({ name: 'dashboard' });
    } else {
        next();
    }
})

export default router