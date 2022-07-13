<template>
  <div class="container">
    <section class="row" data-aos="fade-up">
      <div class="col-12" v-for="item in 10" :key="item.$key">
        <UserNotificationItem
          title="solde total"
          description="Le solde total de votre compte comprend désormais les bénéfices et le solde en attente."
          img="1000"
        />
      </div>
    </section>
  </div>
</template>

<script>
import UserNotificationItem from "./components/UserNotificationItem.vue";
export default {
  data: () => ({}),
  mounted() {},
  methods: {},
  components: { UserNotificationItem },
};
</script>

<style scoped>
.c-card {
  background-color: #f1f1f1 !important;
}
.bg-gray {
  background: transparent;
}
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
