export default {
    setUsers(state, payload) {
        state.users = payload;
    },
    setFetchTimesTamp(state) {
        state.lastFetch = new Date().getTime();
    },

    setErrors(state, payload) {
        state.errors = payload;
    },
    setSuccess(state, payload) {
        state.success = payload;
    }
}