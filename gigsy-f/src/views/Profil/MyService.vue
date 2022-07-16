<template>
  <div class="container">
    <UserMyServicesTabs data-aos="fade-up" class="services" />
  </div>
</template>

<script>
import UserMyServicesTabs from "./components/UserMyServicesTabs.vue";
export default {
  components: { UserMyServicesTabs },
};
</script>

<style scoped>
label {
  float: left;
}
.ctf1 {
  margin-top: 9rem !important;
}
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}
.profil-pic {
  border-radius: 50%;
  max-width: 150px;
}

li {
  text-align: left;
  line-height: 2rem;
}
</style>
