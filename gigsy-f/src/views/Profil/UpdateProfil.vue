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
              <label for="img">Image profil</label>

              <input
                @change="onFileChange"
                class="form-control"
                id="img"
                :class="{ 'is-invalid': form.errors.has('first_name') }"
                type="file"
                accept="image/*"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('first_name')"
              >
                {{ form.errors.get("first_name") }}
              </div>
            </div>
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
              <label for="name">Votre prénom</label>
              <input
                type="text"
                class="form-control"
                v-model="form.last_name"
                :class="{ 'is-invalid': form.errors.has('last_name') }"
              />
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('last_name')"
              >
                {{ form.errors.get("last_name") }}
              </div>
            </div>
            <div class="form-group">
              <label for="name">Votre Email</label>
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
              <label for="description">Description</label>
              <textarea
                class="form-control"
                name="description"
                id="description"
                :class="{ 'is-invalid': form.errors.has('description') }"
                cols="30"
                rows="10"
                v-model="form.description"
              >
              </textarea>
              <div
                class="invalid-feedback text-left"
                v-if="form.errors.has('description')"
              >
                {{ form.errors.get("description") }}
              </div>
            </div>

            <div class="form-group">
              <label for="name">Mot de Passe</label>
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
              <label for="name">Répéter le mot de passe</label>
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
              <button type="submit" :disabled="form.busy">Modifier</button>
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
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
  },
  data: () => ({
    form: new Form({
      first_name: "",
      last_name: "",
      email: "",
      description: "",
      img: "",
      password: "",
      password_confirmation: "",
    }),
  }),
  mounted() {
    this.form.first_name = this.getData.user.first_name;
    this.form.last_name = this.getData.user.last_name;
    this.form.email = this.getData.user.email;
    this.form.description = this.getData.user.description;
  },

  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.form.img = files[0];
    },
    register() {
      this.form
        .put("/api/v1/sellers/" + this.getData.user.id)
        .then(async (response) => {
          await this.$store.dispatch("setUser", response.data);
          this.form.reset();
          this.$toasted.success(response.data.message);
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
          });
        });
    },
  },
};
</script>

<style scoped>
label {
  text-align: left;
  width: 100%;
  padding-left: 1rem;
}
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
