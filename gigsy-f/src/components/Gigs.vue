<template>
  <router-link
    tag="div"
    :to="{ name: 'gigs', params: { slug: service.slug } }"
    class="icon-box p-0"
  >
    <div>
      <img class="card-img-top" :src="service.image" alt="Card image cap" />
    </div>
    <div class="row m-0 d-flex justify-content-between">
      <div class="col-12 my-3 d-flex justify-content-between">
        <span>
          <i class="fa fa-user" aria-hidden="true"></i>
          {{ service.seller ? service.seller.user.fullname : "" }}
        </span>
        <span
          >{{ service.rating }} <span class="fa fa-star checked"></span
        ></span>
      </div>
      <div class="col-12 my-3 d-flex justify-content-between">
        <h5 class="text-left checked">
          {{ service.name }}
        </h5>
      </div>
      <small class="col-12 text-muted text-left">
        start from {{ service.price }}$
      </small>
    </div>
  </router-link>
</template>

<script>
export default {
  props: ["service"],
};
</script>

<style scoped>
.card-img-top {
  width: 100%;
  height: 150px;
  object-fit: cover;
}

.card-text {
  padding-top: 10px;
  position: absolute;
  left: 60px;
}

hr {
  margin: 0;
}

.checked {
  color: orange;
}
</style>
