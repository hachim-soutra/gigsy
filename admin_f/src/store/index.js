import { createStore } from 'vuex'
import authModule from './modules/auth/index'
import usersModule from './modules/users/index'

export default createStore({
    state: {},
    mutations: {},
    actions: {},
    modules: {
        auth: authModule,
        users: usersModule
    }
})