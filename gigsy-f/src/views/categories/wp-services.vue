<template>
  <div class="container-fluid log-reg-container">
         <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Word press</p>
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
        services: [{description:"Our studio will create a responsive wordpress website design", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/200241988/original/db87966a493192ec49223279b38a32b64c406229.jpg", price: "STARTING AT US$100", rating: 5.0, count: 15},
         {description:"I will design a professional wordpress website with oxygen builder", src: "https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/201674777/original/ea6855a00955f6aff6102628fea67ce569033986.jpg", price: "STARTING AT US$120", rating: 4.9, count: 65}
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
