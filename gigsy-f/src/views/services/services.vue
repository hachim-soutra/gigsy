<template>
  <div class="container-fluid log-reg-container">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Découvrez les excellents services que nous offrons</p>
        </div>
<<<<<<< Updated upstream


        <VueSlickCarousel v-bind="settings" :style="{ height: '372px' }">

          <router-link :to="{ name: 'seo-services' }">
            <div class="container">
              <img
                src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png"
                alt="seo" class="img-fluid" style="width:100%;">
              <div class="top-left">SEO</div>
            </div>
          </router-link>

          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/illustration-2x.png"
              alt="illustration" class="img-fluid" style="width:100%;">
            <div class="top-left">ILLUSTATION</div>
          </div>



          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741674/translation-2x.png"
              alt="translation" class="img-fluid" style="width:100%;">
            <div class="top-left">TRANSLATION</div>
          </div>



          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/data-entry-2x.png"
              alt="data" class="img-fluid" style="width:100%;">
            <div class="top-left">DATA ENTRY</div>
          </div>




          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741678/book-covers-2x.png"
              alt="book" class="img-fluid" style="width:100%;">
            <div class="top-left">BOOK COVERS</div>
          </div>




          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/ae11e2d45410b0eded7fba0e46b09dbd-1598561917003/wordpress-2x.png"
              alt="wordpress" class="img-fluid" style="width:100%;">
            <div class="top-left">WORDPRESS</div>
          </div>



          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741669/voiceover-2x.png"
              alt="voiceover" class="img-fluid" style="width:100%;">
            <div class="top-left">VOICE OVER</div>
          </div>



          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741663/animated-explainer-2x.png"
              alt="animated" class="img-fluid" style="width:100%;">
            <div class="top-left">ANIMATED EXPLAINER</div>
          </div>


          <div class="container">
            <img
              src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741667/social-2x.png"
              alt="social" class="img-fluid" style="width:100%;">
            <div class="top-left">SOCIAL MEDIA</div>
          </div>

        </VueSlickCarousel>


=======
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
     
>>>>>>> Stashed changes
      </div>
    </section>
  </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
// optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
  name: 'MyComponent',
  components: { VueSlickCarousel },
  data() {
    return {
<<<<<<< Updated upstream
=======
        services: [{name:"SEO", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png", path: "seo-services"},
         {name: "Illustration", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/illustration-2x.png", path: "illus-services"},
         {name: "Traduction", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741674/translation-2x.png", path: "trad-services"},
          {name: "Saisie des données", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741664/data-entry-2x.png", path: "sais-services"},
          {name: "Couverture du livre", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741678/book-covers-2x.png", path: "couv-services"},
          {name: "Création de logos", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741678/logo-design-2x.png", path: "logo-services"},
          {name: "Word press", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/ae11e2d45410b0eded7fba0e46b09dbd-1598561917003/wordpress-2x.png", path: "wp-services"}, 
           {name: "Voix off", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741669/voiceover-2x.png", path: "voix-services"},
          {name: "Explication vidéo", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741663/animated-explainer-2x.png", path: "video-services"},
           {name: "Sociaux médias", src: "https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741667/social-2x.png", path: "sm-services"}],
>>>>>>> Stashed changes
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
  padding: 10px;
}

/*img:hover {
    cursor: pointer;
}*/
</style>
