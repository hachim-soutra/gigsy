import ApiService from "@s/api.service";

export const fetchGigs = (slug) => {
  return ApiService.get(`api/v1/gigs/${slug}`);
};