export default {
    setUser(state, payload) {
        state.user = payload.user;
        state.token = payload.token;
        state.userId = payload.userId;
        state.didAutoLogout = false;
    },
    setErrors(state, payload) {
        state.errors = payload;
    },
    setSuccess(state, payload) {
        state.success = payload.success;
    },
    setAutoLogout(state) {
        state.didAutoLogout = true;
    }
}