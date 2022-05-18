export default {
  setUser(context, payload) {
    console.log(payload.user);
    context.commit("setUser", {
      data: payload.user,
      token: payload.access_token,
    });
  },
  logout(context) {
    context.dispatch("logout");
  },
};
