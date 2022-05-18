export default {
  setUser(state, payload) {
    state.data = payload.data;
    state.token = payload.token;
  },
  logout(state) {
    state.data = null;
    state.token = null;
    this.$router.push({ name: "login" });
  },
};
