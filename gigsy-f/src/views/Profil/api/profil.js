import ApiService from "@s/api.service";

export const fetchCategories = () => {
  return ApiService.get(`api/v1/categories/list?active=1`);
};
export const fetchMyServices = ($user) => {
  return ApiService.get(`api/v1/seller/services/list/` + $user);
};
export const fetchMyOrders = ($user) => {
  return ApiService.get(`api/v1/seller/orders/list/` + $user);
};
export const removeOrder = ($id) => {
  return ApiService.delete(`api/v1/seller/orders/` + $id);
};
