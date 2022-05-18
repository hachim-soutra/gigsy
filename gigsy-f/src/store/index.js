import Vue from "vue";
import Vuex from "vuex";

import authModule from "./modules/auth/index";

import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    user: authModule,
  },
  plugins: [createPersistedState()],
});
