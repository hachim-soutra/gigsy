<template>
  <div class="container">
    <UserMyServicesTabs
      data-aos="fade-up"
      class="services"
      :services="services"
    />
  </div>
</template>

<script>
import Form from "vform";
import { fetchMyServices } from "./api/profil";
import UserMyServicesTabs from "./components/UserMyServicesTabs.vue";
export default {
  data: () => ({
    services: [],
    form: new Form({
      first_name: "",
      email: "",
      password: "",
      password_confirmation: "",
    }),
    date: "12/12/22",
    fullname: "Hachim Soutra",
    telephone: "06 00 00 00 00",
    emailp: "hachim.soutra@gigsy.com",
  }),
  mounted() {
    this.fetchData();
  },
  methods: {
    register() {
      this.form
        .post(this.$app_url + "/api/v1/user/register")
        .then((response) => {
          this.form.reset();
          this.$toasted.success(response.data.message);
        });
    },
    fetchData() {
      this.loading = true;
      fetchMyServices()
        .then((res) => {
          this.services = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .finally(() => (this.loading = false));
    },
  },
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
