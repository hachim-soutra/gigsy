<template>
  <div class="row m-0 border-bottom px-0 py-2">
    <img
      class="u-circle img-shadow col-1"
      :src="img"
      width="100%"
      height="auto"
    />
    <div class="col text-left d-flex justify-content-start align-items-center">
      <h3>{{ title }}</h3>
    </div>
    <div class="col-3 d-flex justify-content-center align-items-center">
      <input
        type="number"
        name=""
        id=""
        v-model="$parent.orders[order].amount"
      />
    </div>
    <div
      class="col-2 d-flex justify-content-center align-items-center"
      @click="$parent.removeOrderItem(id)"
    >
      <i class="fa fa-window-close text-danger" aria-hidden="true"></i>
    </div>
  </div>
</template>

<script>
export default {
  props: ["id", "title", "price", "img", "order"],
};
</script>

<style scoped>
user-profile-header .relative {
  position: relative;
  width: 128px;
  height: 128px;
  margin: auto;
}

.middle-content .img-shadow {
  box-shadow: 0 0 3px 1px rgb(0 0 0 / 5%) !important;
}
.img-shadow {
  background-color: #fff;
  transition: all 0.2s ease-in-out;
  border: 1px solid rgba(0, 0, 0, 0.06);
}
.u-circle {
  object-fit: fill;
  height: auto;
  padding: 0;
  margin: 0;
}
.user-profile-header .verification-badge {
  position: absolute;
  top: 67%;
  right: 0px;
}

h3 {
  font-size: 0.9rem;
  font-weight: 700;
}

p {
  font-size: 0.7rem;
  font-weight: 300;
  color: gray;
}
.border-bottom {
  border-bottom: 1px solid black;
}
</style>
