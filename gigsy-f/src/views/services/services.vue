<template>
  <div class="container-fluid log-reg-container">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p>Check out the great services we offer</p>
        </div>
        <div class="row">
     <router-link :to="{ name: 'seo-services'}" class="col-6 col-md-4 col-lg-3" v-for="service in services" :key="service.$key">
            <div class="container">
              <img
                src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png"
                alt="seo" class="img-fluid" style="width:100%;">
              <div class="top-left">{{service}}</div>
            </div>
          </router-link>
        </div>
     
      </div>
    </section>
  </div>
</template>

<script>

export default {
  name: 'MyComponent',
  data() {
    return {
        services: ["seo", "illus", "Translate"],
      settings: {
        arrows: true,
        dots: true,
        dotsClass: 'slick-dots custom-dot-class',
        edgeFriction: 0.35,
        infinite: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3
      },
    }
  },
}
</script>


<style scoped>
label {
  float: left;
}

p {
  margin-top: 40px;
}
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}



/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 30px;
}

img {
  pointer-events: none;
}

/*img:hover {
    cursor: pointer;
}*/
</style>
