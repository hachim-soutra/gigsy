<template>
  <div class="container-fluid log-reg-container">
    <section class="login-regester mt-lg-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-center"  
          data-aos="fade-up"
          data-aos-delay="200">
          <img class="img-fluid animated" src="assets/img/hero-img.svg" />
        </div>
        <div
          class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-center"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <form
            @submit.prevent="forget"
            role="form"
            class="php-email-form w-100"
          >
            <div class="form-group">
              <label for="email">Your Email</label>
              <input
              v-model="form.email"
                type="email"
                class="form-control"
                name="email"
                id="email"
                :class="{ 'is-invalid': form.errors.has('email') }"
              />
              <has-error :form="form" field="email"></has-error>
            </div>
            <div class="text-center">
              <button type="submit">Send email</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Form from 'vform'
export default {
  data: () => ({
    form: new Form({
      email: '',
    })
  }),

  methods: {
    async forget () {
      await this.form.post(`${this.$config.app_url}/api/forget`).then((result) => {
        console.log(result);
        
      }).catch((err) => {
                console.log(err);

      });
    }
  }
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
