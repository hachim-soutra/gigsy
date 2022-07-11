<template>
  <div class="container">
    <UserProfilHeader></UserProfilHeader>
    <UserProfilTabs />
  </div>
</template>

<script>
import Form from "vform";
import UserProfilHeader from "./components/UserProfilHeader.vue";
import UserProfilTabs from "./components/UserProfilTabs.vue";
export default {
  data: () => ({
    form: new Form({
      first_name: "",
      email: "",
      password: "",
      password_confirmation: "",
    }),
    mygigs: [
      {
        title: "AAAA",
        description: "aaaa aaaa aaaaa aaaaaaa aaaaaaaaa aaaaaa",
        price: 20,
      },
      {
        title: "BBBB",
        description: "bbbb bbbb bbbbb bbbbbb bbbbbbbb bbbbbbb",
        price: 30,
      },
      {
        title: "CCCC",
        description: "cccc cccc ccccc ccccccc ccccccccc cccccc",
        price: 60,
      },
      {
        title: "DDDD",
        description: "dddd dddd ddddd ddddddd ddddddddd dddddd",
        price: 80,
      },
    ],
    date: "12/12/22",
    fullname: "Hachim Soutra",
    telephone: "06 00 00 00 00",
    emailp: "hachim.soutra@gigsy.com",
  }),
  methods: {
    register() {
      this.form
        .post(this.$app_url + "/api/v1/user/register")
        .then((response) => {
          this.form.reset();
          this.$toasted.success(response.data.message);
        });
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
