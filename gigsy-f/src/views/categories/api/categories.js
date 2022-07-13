import ApiService from "@s/api.service";

export const fetchCategories = () => {
  return ApiService.get(`api/v1/categories/list`);
};

export const fetchCategory = (slug) => {
  return ApiService.get(`api/v1/category/${slug}`);
};
