<template>
  <div class="container-fluid log-reg-container">
    <section class="login-regester mt-lg-5">
      <div class="row d-flex justify-content-center">
        <div
          class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-center"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <img class="img-fluid animated" src="assets/img/hero-img.svg" />
        </div>
        <div
          class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-center"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <form
            @submit.prevent="login"
            @keydown="form.onKeydown($event)"
            role="form"
            class="php-email-form w-100"
          >
            <div class="form-group">
              <label for="name">Your Email</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                v-model="form.email"
                :class="{ 'is-invalid': form.errors.has('email') }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('email')"
              >
                {{ form.errors.get("email") }}
              </div>
            </div>

            <div class="form-group">
              <label for="name">password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                v-model="form.password"
                :class="{ 'is-invalid': form.errors.has('password') }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('password')"
              >
                {{ form.errors.get("password") }}
              </div>
            </div>
            <div class="text-center">
              <button type="submit" :disabled="form.busy">Login</button>
              <br />
              <router-link class="mt-2" :to="{ name: 'forget' }"
                >Forget password ?</router-link
              >
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Form from "vform";
export default {
  data: () => ({
    form: new Form({
      email: "",
      password: "",
    }),
  }),
  methods: {
    login() {
      this.form
        .post(this.$app_url + "/api/v1/user/login")
        .then(async (response) => {
          this.form.reset();
          await this.$store.dispatch("setUser", response.data);
          this.$toasted.success(response.data.message);
          this.$router.push({ name: "home" });
        });
    },
  },
};
</script>

<style scoped>
label {
  float: left;
}
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}
</style>
