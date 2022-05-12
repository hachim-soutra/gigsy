export default {
    users(state) {
        return state.users;
    },
    errors(state) {
        return state.errors;
    },
    success(state) {
        return state.success;
    },
    hasUsers(state) {
        return state.users && state.users.length > 0;
    },
    shouldUpdate(state) {
        const lastFetch = state.lastFetch;
        if (!lastFetch) {
            return true;
        }
        const currentTimeStamp = new Date().getTime();
        //this calcule means last fetch more than 1 minute so its return true
        return (currentTimeStamp - lastFetch) / 1000 > 60;
    }
}