<template>
  <div class="container-fluid ctf1 my-3">
    <div class="row justify-content-center">
      <div
        class="col-lg-7 col-md-12 col-sm-12 mx-4 rounded p-3"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div class="row border">
          <div
            class="col-lg-5 col-md-12 p-2 rounded-top text-center"
            style="height: 300px"
          >
            <img
              class="rounded-circle mx-auto"
              src="assets\img\1549311939801.jpg"
              max-width="auto"
              height="100%"
              style="margin-top: -14%"
            />
            <div
              class="rounded-circle position-relative mx-auto pt-3"
              style="
                background-color: rgb(0, 179, 255);
                width: 100px;
                height: 100px;
                margin-top: -10%;
                color: white;
              "
            >
              date d'inscription {{ date }}
            </div>
          </div>
          <div class="col-lg-7 col-md-12 p-2 pt-5">
            <h1 class="text-lg-left text-md-center">{{ fullname }}</h1>
            <h2 class="text-lg-left text-md-center">
              {{ telephone }}
            </h2>
            <h2 class="text-lg-left text-md-center">{{ emailp }}</h2>
          </div>
        </div>
        <div class="row p-4">
          <h2 v-if="mygigs.length === 0">Vous n'a Aucun Gig</h2>
          <div class="row p-4" v-else>
            <h2 class="p-4">Vous avez a {{ mygigs.length }} Gigs</h2>
            <table class="table">
              <caption>
                La liste des Gigs de
                {{
                  fullname
                }}
              </caption>
              <thead>
                <tr>
                  <th scope="col"><h4>#</h4></th>
                  <th scope="col"><h4>Titre</h4></th>
                  <th scope="col"><h4>Description</h4></th>
                  <th scope="col"><h4>Prix</h4></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(mygig, index) in mygigs" :key="mygig.index">
                  <th scope="row">
                    <h5>{{ index + 1 }}</h5>
                  </th>
                  <td>
                    <h5>{{ mygig.title }}</h5>
                  </td>
                  <td>
                    <h5>{{ mygig.description }}</h5>
                  </td>
                  <td>
                    <h5>{{ mygig.price }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div
        class="col-lg-4 p-3 mx-4 rounded align-items-center border"
        style="background-color: white; max-height: 32rem"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h4 class="p-3" style="background-color: #e9ecef; text-align: center">
          Modifiez vos coordonnés :
        </h4>
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
    </div>
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
