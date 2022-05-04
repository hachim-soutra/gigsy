import mutations from "./mutations";
import actions from "./actions";
import getters from "./getters";

export default {
    state: {
        user: [],
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