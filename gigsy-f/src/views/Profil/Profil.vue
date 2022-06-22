<template>
  <div class="container-fluid log-reg-container">
    <section class="login-regester mt-lg-5">
      <div class="row d-flex d-flex justify-content-around p-3">
        <div
          class="col-lg-5 col-md-10 mt-5 mt-lg-0 align-items-center border rounded p-5"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <img
            class=" animated profil-pic"
            src="assets\img\1549311939801.jpg"
          />
          <form
            @submit.prevent="register"
            @keydown="form.onKeydown($event)"
            class="php-email-form w-100"
          >
            <div class="form-group">
              <label for="name">Votre nom</label>
              <input
                type="text"
                class="form-control"
                v-model="form.first_name"
                :class="{ 'is-invalid': form.errors.has('first_name') }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('first_name')"
              >
                {{ form.errors.get("first_name") }}
              </div>
            </div>
            <div class="form-group">
              <label for="name">Votre Email</label>
              <input
                disabled
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
              <label for="name">Votre nouveau mot de passe</label>
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
              <label for="name">Répéter le nouveau mot de passe</label>
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
              <button type="submit" :disabled="form.busy" class="mt-3">
                Modifier
              </button>
            </div>
          </form>
        </div>
        <div
          class="col-lg-5 col-md-10 mt-5 mt-lg-0 align-items-center border rounded p-5"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <h2 class="mb-5">Mes Gigs</h2>
          <p v-if="mygigs.length == 0">Vous n'avez aucun Gig</p>
          <ul v-else>
            <li v-for="mygig in mygigs" :key="mygig.$key">{{ mygig }}</li>
          </ul>
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
      first_name: "",
      email: "",
      password: "",
      password_confirmation: "",
    }),
    mygigs: ["gig1", "gig2", "gig3", "gig4"],
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
.profil-pic {
  border-radius: 50%;
  max-width: 150px;
}

li {
  text-align: left;
  line-height: 2rem;
}
</style>
