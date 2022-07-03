import ApiService from "@s/api.service";

export const fetchServices = () => {
  return ApiService.get(`api/v1/categories/list`);
};
