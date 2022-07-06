import Vue from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import JwtService from "./jwt.service";

const ApiService = {
  init() {
    Vue.use(VueAxios, axios);
    Vue.axios.defaults.baseURL = Vue.prototype.$app_url;
    if (JwtService.getToken().token) {
      Vue.axios.defaults.headers.common = {
        "X-Requested-With": "XMLHttpRequest",
        Authorization: `Bearer ${JwtService.getToken().token}`,
        "Content-Type": "multipart/form-data",
        Accept: "application/json",
      };
    }
  },

  setHeader() {
    Vue.axios.defaults.headers.common = {
      "X-Requested-With": "XMLHttpRequest",
      Authorization: `Bearer ${JwtService.getToken().token}`,
      "Content-Type": "multipart/form-data",
    };
  },

  get(resource, slug = "") {
    if (slug !== "") {
      return Vue.axios
        .get(`${Vue.prototype.$app_url}/${resource}/${slug}`)
        .catch((error) => {
          return new Promise((resolve, reject) => {
            reject(error);
          });
        });
    } else {
      return Vue.axios.get(`/${resource}`).catch((error) => {
        return new Promise((resolve, reject) => {
          reject(error);
        });
      });
    }
  },

  post(resource, params) {
    return Vue.axios
      .post(`${Vue.prototype.$app_url}/${resource}`, params)
      .catch((error) => {
        return new Promise((resolve, reject) => {
          reject(error);
        });
      });
  },

  put(resource, params) {
    return Vue.axios
      .put(`${Vue.prototype.$app_url}/${resource}`, params)
      .catch((error) => {
        return new Promise((resolve, reject) => {
          reject(error);
        });
      });
  },

  delete(resource, params) {
    return Vue.axios
      .delete(`${Vue.prototype.$app_url}/${resource}`, params)
      .catch((error) => {
        return new Promise((resolve, reject) => {
          reject(error);
        });
      });
  },
};

export default ApiService;
