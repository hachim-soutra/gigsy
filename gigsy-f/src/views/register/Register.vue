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
            action="forms/contact.php"
            method="post"
            role="form"
            class="php-email-form w-100"
          >
            <div class="form-group">
              <label for="name">Your name</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                data-rule="email"
                data-msg="Please enter a valid email"
              />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Your Email</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                data-rule="email"
                data-msg="Please enter a valid email"
              />
              <div class="validate"></div>
            </div>
         
            <div class="form-group">
              <label for="name">password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                id="password"
              />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">repeat password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                id="password"
              />
              <div class="validate"></div>
            </div>
            <div class="text-center">
              <button type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
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
