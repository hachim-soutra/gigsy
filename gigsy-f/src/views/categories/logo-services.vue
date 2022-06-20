<template>
  <div class="container-fluid log-reg-container">
         <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Création de logos</p>
        </div>
        <div class="row">
              <small style="left: 15px;position: relative;">{{services.length}} services disponibles</small>
              <span class="sortB">Trier par</span>
              <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meilleure vente
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Recommandé</a>
                <a class="dropdown-item" href="#">Les plus récents arrivages</a>
              </div>
          </div>
        </div>

        <div class="row">

          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" v-for="service in services" :key="service.$key">
            <div class="icon-box">
              <div><img class="card-img-top" :src="service.src" alt="Card image cap"></div>
              <hr>
              <p class="description">{{service.description}}</p>
              <hr>  
              <span class="fa fa-star checked">{{service.rating}}</span><small> {{service.count}}</small>
              <p class="card-text"><small class="text-muted">{{service.price}}</small></p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Services Section -->
  </div>
</template>


<script>

export default {
  name: 'MyComponent',
  data() {
    return {
        services: [{description:"I will design 3 modern minimalist logo design", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/22527722/original/d9de303ea2f07efe1e75e1a67f657e33e6aa9b4f.jpg", price: "STARTING AT US$10", rating: 4.9, count: 1230},
        {description:"I will design 3 modern minimalist flat logo designs", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/3171448/original/a41a38f3733bb97279a49d1449f7337dece50693.jpg", price: "STARTING AT US$10", rating: 4.9, count: 895},
        {description:"I will create a unique logo and brand identity", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/98614021/original/baa1f40071e28953280573a5f5cb4d9516950c15.jpg", price: "STARTING AT US$90", rating: 5.0, count: 255},
        {description:"Our studio will design a modern and minimalist logo with copyright", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/151843524/original/9b551fdc526dfb3c2115262720762f990974e8ab.jpg", price: "STARTING AT US$85", rating: 4.9, count: 166},
        {description:"I will design hand drawn custom signature logo or branding kit", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/164834346/original/86dbae2c024c03b472cdc49aafb49fb6a3df5ac6.jpg", price: "STARTING AT US$70", rating: 4.7, count: 148}
          ],
    }
  },
}
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
.section-title{
    margin-top:40px;
}

.card-text{
    padding-top: 10px;
    position: absolute;
    left: 60px;
}

hr{
    margin: 0;
}

.checked {
  color: orange;
}

small{
    color: #b5b6ba;
}

.dropdown{
  margin-bottom: 15px;
  left:49em;
}

.sortB{
  left: 49em;
  position: relative;
  margin-top: 10px;
  color: gray;
}
</style>
