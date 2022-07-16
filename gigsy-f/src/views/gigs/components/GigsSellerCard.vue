<template>
  <div class="col-4">
    <div class="card mb-5">
      <div class="card-body px-2">
        <div class="section-title m-0 p-0" data-aos="fade-up">
          <p>Carte de services</p>
        </div>
        <div class="row m-0 d-flex justify-content-between mb-2">
          <div class="col-8 text-left p-0">livraisons :</div>
          <div class="col text-right">{{ livraison }} Jour</div>
        </div>
        <div class="row m-0 d-flex justify-content-between mb-2">
          <div class="col-8 text-left p-0">Reviews :</div>
          <div class="col text-right">
            {{ rating }} <span class="fa fa-star checked"></span>
          </div>
        </div>
        <div class="row m-0 d-flex justify-content-between mb-2">
          <div class="col-8 text-left p-0">Acheteurs :</div>
          <div class="col text-right">0</div>
          <!-- <div class="col text-right">{{ bayers_count }}</div> -->
        </div>
        <div class="row m-0 d-flex justify-content-between mb-2">
          <div class="col-8 text-left p-0">
            Le prix du service commence à partir de :
          </div>
          <div class="col text-right">{{ price }} DHS</div>
        </div>
      </div>
    </div>

    <div class="wrapper w-100 bg-white p-3" v-if="seller">
      <div class="section-title" data-aos="fade-up">
        <p>About The Seller</p>
      </div>
      <div class="image">
        <img :src="seller.user.img" alt="" width="100%" height="auto" />
      </div>
      <strong>{{ seller.user.fullname }}</strong>
      <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      <p v-html="seller.user.description"></p>
      <br />
      <router-link
        v-if="getData && seller.id != getData.id && gigs.status == 1"
        :to="{ name: 'message.profil', params: { seller: seller.id } }"
        class="btn btn-outline-primary"
      >
        contacter le vendeur
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  props: ["seller", "price", "livraison", "rating", "bayers_count", "gigs"],
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
  },
  data() {
    return {};
  },
};
</script>

<style scoped>
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}

.card-text {
  padding-top: 10px;
  position: absolute;
  left: 60px;
}

.checked {
  color: orange;
}

small {
  color: #b5b6ba;
}

.dropdown {
  margin-bottom: 15px;
  left: 49em;
}

.sortB {
  left: 49em;
  position: relative;
  margin-top: 10px;
  color: gray;
}

.button span {
  font-size: 14px;
  font-weight: 500;
  display: block;
  position: relative;
  padding-left: 24px;
  margin-left: -8px;
  line-height: 26px;
  transform: translateY(var(--span-y, 0));
  transition: transform 0.7s ease;
}

.button span:before,
.button span:after {
  content: "";
  width: var(--w, 2px);
  height: var(--h, 14px);
  border-radius: 1px;
  position: absolute;
  left: var(--l, 8px);
  top: var(--t, 6px);
  background: currentColor;
  transform: scale(0.75) rotate(var(--icon-r, 0deg))
    translateY(var(--icon-y, 0));
  transition: transform 0.65s ease 0.05s;
}

.button span:after {
  --w: 14px;
  --h: 2px;
  --l: 2px;
  --t: 12px;
}

.button .cart {
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -13px 0 0 -18px;
  transform-origin: 12px 23px;
  transform: translateX(-120px) rotate(-18deg);
}

.button .cart:before,
.button .cart:after {
  content: "";
  position: absolute;
}

.button .cart:before {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  box-shadow: inset 0 0 0 2px var(--cart);
  bottom: 0;
  left: 9px;
  filter: drop-shadow(11px 0 0 var(--cart));
}

.button .cart:after {
  width: 16px;
  height: 9px;
  background: var(--cart);
  left: 9px;
  bottom: 7px;
  transform-origin: 50% 100%;
  transform: perspective(4px) rotateX(-6deg) scaleY(var(--fill, 0));
  transition: transform 1.2s ease var(--fill-d);
}

.button .cart svg {
  z-index: 1;
  width: 36px;
  height: 26px;
  display: block;
  position: relative;
  fill: none;
  stroke: var(--cart);
  stroke-width: 2px;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.button .cart svg polyline:last-child {
  stroke: var(--tick);
  stroke-dasharray: 10px;
  stroke-dashoffset: var(--offset, 10px);
  transition: stroke-dashoffset 0.4s ease var(--offset-d);
}

.button.loading {
  --scale: 0.95;
  --span-y: -32px;
  --icon-r: 180deg;
  --fill: 1;
  --fill-d: 0.8s;
  --offset: 0;
  --offset-d: 1.73s;
}

.button.loading .cart {
  animation: cart 3.4s linear forwards 0.2s;
}

@keyframes cart {
  12.5% {
    transform: translateX(-60px) rotate(-18deg);
  }

  25%,
  45%,
  55%,
  75% {
    transform: none;
  }

  50% {
    transform: scale(0.9);
  }

  44%,
  56% {
    transform-origin: 12px 23px;
  }

  45%,
  55% {
    transform-origin: 50% 50%;
  }

  87.5% {
    transform: translateX(70px) rotate(-18deg);
  }

  100% {
    transform: translateX(140px) rotate(-18deg);
  }
}

html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

* {
  box-sizing: inherit;
}

*:before,
*:after {
  box-sizing: inherit;
}

body {
  min-height: 100vh;
  display: flex;
  font-family: "Inter UI", "Inter", Arial;
  justify-content: center;
  align-items: center;
  background: #eceffc;
}

body .dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}

body .dribbble img {
  display: block;
  height: 28px;
}

body .twitter {
  position: fixed;
  display: block;
  right: 64px;
  bottom: 14px;
}

body .twitter svg {
  width: 32px;
  height: 32px;
  fill: #1da1f2;
}

span {
  content: "\2713";
}

.wrapper .container {
  width: calc(33% - 10px);
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px 30px;
  border-radius: 5px;
}

.container .quote i {
  margin-top: 10px;
  font-size: 45px;
  color: #17c0eb;
}

.wrapper .container .image {
  margin: 10px 0;
  height: 150px;
  width: 150px;
  background: #c10037;
  padding: 3px;
  border-radius: 50%;
}

.container .image img {
  height: 200px;
  width: 200px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid black;
}
</style>
