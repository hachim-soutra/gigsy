<template>
  <div class="container-fluid log-reg-container">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p>Découvrez les excellents services que nous offrons</p>
        </div>

        <div class="row">
          <div class="col-6 col-md-3 col-lg-4"  v-for="service in services" :key="service.$key">
          <router-link :to="{ name: service.path}" >
            <div class="container">
              <img
                :src="service.src"
                alt="seo" class="img-fluid">
              <div class="top-left">{{service.name}}</div>
            </div>
          </router-link>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>

export default {
  data() {
    return {
        services: [{name:"SEO", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png", path: "seo-services"},
         {name: "Illustration", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/illustration-2x.png", path: "illus-services"},
         {name: "Traduction", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741674/translation-2x.png", path: "trad-services"},
          {name: "Saisie des données", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/data-entry-2x.png", path: "sais-services"},
          {name: "Couverture du livre", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741678/book-covers-2x.png", path: "couv-services"},
          {name: "Création de logos", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741678/logo-design-2x.png", path: "logo-services"},
          {name: "Word press", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/ae11e2d45410b0eded7fba0e46b09dbd-1598561917003/wordpress-2x.png", path: "wp-services"}, 
           {name: "Voix off", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741669/voiceover-2x.png", path: "voix-services"},
          {name: "Explication vidéo", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741663/animated-explainer-2x.png", path: "video-services"},
           {name: "Sociaux médias", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741667/social-2x.png", path: "sm-services"}]
  }
}
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
  padding: 10px;
}

/*img:hover {
    cursor: pointer;
}*/
</style>
