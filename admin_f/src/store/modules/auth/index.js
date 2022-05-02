import mutations from "./mutations";
import actions from "./actions";
import getters from "./getters";

export default {
    state: {
        user: null,
        userId: null,
        token: null,
        errors: '',
        didAutoLogout: false,
        success: ''
    },
    mutations,
    actions,
    getters
}