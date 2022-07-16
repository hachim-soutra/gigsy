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
      <div class="row" v-if="loading" data-aos="fade-up">
        <loader
          class="col-6 col-md-3 col-lg-4"
          :active="loading"
          message="Please wait 5 seconds"
        />
        <loader
          class="col-6 col-md-3 col-lg-4"
          :active="loading"
          message="Please wait 5 seconds"
        />
        <loader
          class="col-6 col-md-3 col-lg-4"
          :active="loading"
          message="Please wait 5 seconds"
        />
      </div>
      <div class="col-12" v-if="!loading">
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
          v-for="(order, key) in orders"
          :key="key"
          :order="key"
          :id="order.id"
          :title="order.service.name"
          :price="order.amount"
          :description="order.service.description"
          :img="order.service.image"
        />
        <div class="row m-0 border-bottom p-1 bg-light border-0">
          <div
            class="col text-left d-flex justify-content-end align-items-center"
          >
            Sub Total
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            {{ priceTotal }} DHS
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
            {{ priceTotal * 0.1 }} DHS
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
            {{ Number.parseFloat(priceTotal * 1.1).toFixed(2) }} DHS
          </div>
          <div
            class="col-2 d-flex justify-content-center align-items-center"
            v-if="orders.length > 0"
          >
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
import Form from "vform";

export default {
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
    priceTotal() {
      let total = 0;
      for (let i = 0; i < this.orders.length; i++) {
        //loop through the array
        total += this.orders[i].amount; //Do the math!
      }
      return Number.parseFloat(total).toFixed(2);
    },
  },
  data: () => ({
    orders: [],
    loading: false,
    form: new Form({}),
    form2: new Form({}),
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
    removeOrderItem(id) {
      this.loading = true;
      this.form
        .delete("/api/v1/seller/orders/" + id)
        .then((res) => {
          this.$toasted.success(res.data.message, {
            singleton: true,
          });
          this.fetchData();
        })
        .catch((err) => {
          this.$toasted.error(err.response.data.message, {
            singleton: true,
          });
        });
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
