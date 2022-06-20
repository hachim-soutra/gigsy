<template>
  <div class="container-fluid log-reg-container">
         <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Couverture du livre</p>
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
        services: [{description:"I will create a premium book cover design or ebook cover design", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/140574007/original/8d0940d80ab643869b70c24acdea87e555b72aff.jpg", price: "STARTING AT US$90", rating: 4.9, count: 296},
         {description:"I will design an eye catching ebook or kindle cover with bonus", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/23596922/original/d256cdd41272ce6d6ed6b7bb797a4707bcfee694.jpg", price: "STARTING AT US$120", rating: 4.9, count: 500},
          {description:"I will design professional ebook cover or kindle cover", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/81346356/original/3abb6cb73253d5f765fb27bcd8bebf293229c4e8.jpg", price: "STARTING AT US$90", rating: 4.9, count: 424},
          {description:"I will design book covers for your fantasy, sci fi, horror etc books", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/12690134/original/9bb45e2f972c093393f95c318c6b385f3e1d02d3.jpg", price: "STARTING AT US$50", rating: 4.9, count: 522},
          {description:"I will design best selling fantasy cover for you", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/207075009/original/ba5f73d4e2f2d1fc5f312b7968da78f84056c546.jpg", price: "STARTING AT US$85", rating: 4.9, count: 885},
          {description:"I will design your minimalist book cover", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/233540990/original/b88700dd1343bcfb033f72d459d1540010c5d191.jpg", price: "STARTING AT US$130", rating: 4.9, count: 445},
          {description:"I will design book cover, format, and ebook conversion", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/190232624/original/206d66fcf2575e2e89352a71326a757f9329e45b.png", price: "STARTING AT US$70", rating: 4.9, count: 778}
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
