import mutations from "./mutations"
import actions from "./actions"
import getters from "./getters"

export default {
    namespaced: true,
    state() {
        return {
            users: [{}],
            lastFetch: null,
            errors: null,
            success: null
        }
    },
    mutations,
    actions,
    getters
}