<template>
  <div class="container">
    <section class="row" data-aos="fade-up">
      <nav class="col-12">
        <ol class="breadcrumb bg-white">
          <li class="breadcrumb-item">
            <a href="/"> Accueil </a>
          </li>

          <li class="breadcrumb-item active">
            <router-link :to="{ name: 'messages' }">panier</router-link>
          </li>
        </ol>
      </nav>
      <div class="col-12">
        <div class="row m-0 border-bottom px-0 py-2 bg-light">
          <div
            class="col text-left d-flex justify-content-start align-items-center"
          >
            <h3>Service</h3>
          </div>
          <div class="col-3 d-flex justify-content-center align-items-center">
            price(DHS)
          </div>
          <div
            class="col-2 d-flex justify-content-center align-items-center"
          ></div>
        </div>
        <UserPanier
          v-for="order in orders"
          :key="order.$key"
          title="hachim soutra"
          price="2022"
          description="lodeeee dhdhdjd <br/> ssbsbbsbshshshss"
          img="1000"
        />
        <div class="row m-0 border-bottom p-1 bg-light border-0">
          <div
            class="col text-left d-flex justify-content-end align-items-center"
          >
            Sub Total
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            1000 DHS
          </div>
          <div
            class="col-2 d-flex justify-content-center align-items-center"
          ></div>
        </div>
        <div class="row m-0 border-bottom p-1 bg-light">
          <div
            class="col text-left d-flex justify-content-end align-items-center"
          >
            Tarif
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            20 DHS
          </div>
          <div
            class="col-2 d-flex justify-content-center align-items-center"
          ></div>
        </div>
        <div class="row m-0 border-bottom px-0 py-2 bg-light">
          <div
            class="col text-left d-flex justify-content-start align-items-center"
          ></div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            1020 DHS
          </div>
          <div class="col-2 d-flex justify-content-center align-items-center">
            <button class="btn btn-success">Checkout</button>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import UserPanier from "./components/UserPanier.vue";
import { fetchMyOrders } from "./api/profil";

export default {
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
  },
  data: () => ({
    orders: [],
  }),
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      this.loading = true;
      fetchMyOrders(this.getData.id)
        .then((res) => {
          this.orders = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .finally(() => (this.loading = false));
    },
  },
  components: { UserPanier },
};
</script>

<style scoped>
.c-card {
  background-color: #f1f1f1 !important;
}
.bg-gray {
  background: transparent;
}
label {
  float: left;
}
.ctf1 {
  margin-top: 9rem !important;
}
button {
  background: #eb5d1e;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
  border: none;
}
.profil-pic {
  border-radius: 50%;
  max-width: 150px;
}

li {
  text-align: left;
  line-height: 2rem;
}
</style>
