<template>
  <router-link
    tag="div"
    :to="{
      name: 'message.profil',
      params: { seller: 1, gigs: 1 },
    }"
    class="row m-0 border-bottom px-5 py-2"
  >
    <img
      class="u-circle img-shadow col-1"
      src="https://avatars.hsoubcdn.com/0e1b05f1e953ee83547da4fb06b9db31?s=256"
      width="100%"
      height="auto"
    />
    <div class="col-8 text-left">
      <h3>{{ title }}</h3>
      <p>{{ description }}</p>
    </div>
  </router-link>
</template>

<script>
export default {
  props: ["title", "description", "img", "seller", "gigs"],
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
  border-radius: 50%;
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
