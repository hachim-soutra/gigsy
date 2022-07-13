import ApiService from "@s/api.service";

export const fetchCategories = () => {
  return ApiService.get(`api/v1/categories/list?active=1`);
};
export const fetchMyServices = () => {
  return ApiService.get(`api/v1/services/list`);
};
