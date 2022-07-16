<template>
  <div class="container">
    <UserProfilHeader data-aos="fade-up"></UserProfilHeader>
    <UserProfilTabs data-aos="fade-up" class="services" :services="services" />
  </div>
</template>

<script>
import Form from "vform";
import { fetchMyServices } from "./api/profil";
import UserProfilHeader from "./components/UserProfilHeader.vue";
import UserProfilTabs from "./components/UserProfilTabs.vue";
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
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
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
      fetchMyServices(this.getData.id)
        .then((res) => {
          this.services = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .finally(() => (this.loading = false));
    },
  },
  components: { UserProfilHeader, UserProfilTabs },
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
