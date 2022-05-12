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
            @submit.prevent="register"
            @keydown="form.onKeydown($event)"
            class="php-email-form w-100"
          >
            <div class="form-group">
              <label for="name">Your name</label>
              <input
                type="text"
                class="form-control"
                v-model="form.name"
                :class="{ 'is-invalid': form.errors.has('name') }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('name')"
              >
                {{ form.errors.get("name") }}
              </div>
            </div>
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
            <div class="form-group">
              <label for="name">repeat password</label>
              <input
                type="password"
                class="form-control"
                name="re-password"
                id="re-password"
                v-model="form.password_confirmation"
                :class="{
                  'is-invalid': form.errors.has('password_confirmation'),
                }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('password_confirmation')"
              >
                {{ form.errors.get("password_confirmation") }}
              </div>
            </div>
            <div class="text-center">
              <button type="submit" :disabled="form.busy">Register</button>
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
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
    }),
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
