<template>
  <div class="container-fluid log-reg-container">
         <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Voix off</p>
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
        services: [{description:"I will record a neutral, articulate, clear british rp voice for you", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/173558298/original/b55d5760c2a45ccc3b939d90c93e1e2278403798.jpg", price: "STARTING AT US$30", rating: 4.9, count: 172},
         {description:"I will record a quality voiceover, british or american female accent", src: "https://fiverr-res.cloudinary.com/video/upload/t_gig_cards_web/kcvptiuismmvjwxoh56d.png", price: "STARTING AT US$50", rating: 4.9, count: 296},
          {description:"I will record a pro american male voice over", src: "https://fiverr-res.cloudinary.com/video/upload/so_0.208377,t_gig_cards_web/kuxydefdb4eyvibe7mrb.png", price: "STARTING AT US$40", rating: 4.8, count: 158}
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
