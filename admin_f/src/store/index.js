import { createStore } from 'vuex'
import authModule from './modules/auth/index'

export default createStore({
    state: {},
    mutations: {},
    actions: {},
    modules: {
        auth: authModule,
    }
})