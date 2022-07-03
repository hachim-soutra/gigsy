<template>
  <div class="container-fluid log-reg-container p-0">
    <section id="services" class="services section-bg m-0 p-0">
      <div class="container">
        <div class="row">
          <div class="section-title p-3 col-12" data-aos="fade-up">
            <p>{{ category.category_name }}</p>
          </div>
          <div class="p-3 col-8 m-auto" data-aos="fade-up">
            <p>{{ category.description }}</p>
          </div>
          <small class="col-12 text-left py-3"
            >{{ category.services.length }} services disponibles</small
          >
          <div class="col-9">
            <div class="row" v-if="loading">
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
            <div class="row" v-else>
              <div
                class="col-md-6 col-lg-3 d-flex align-items-stretch"
                v-for="service in category.services"
                :key="service.$key"
              >
                <div class="icon-box">
                  <div>
                    <img
                      class="card-img-top"
                      :src="service.image"
                      alt="Card image cap"
                    />
                  </div>
                  <hr />
                  <p class="description">{{ service.name }}</p>
                  <hr />
                  <span class="fa fa-star checked">{{ service.rating }}</span>
                  <p class="card-text">
                    <small class="text-muted">{{ service.price }}</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <FilterAside :services="category.services"></FilterAside>
        </div>
      </div>
    </section>
    <!-- End Services Section -->
  </div>
</template>
<script>
import FilterAside from "../components/FilterAside.vue";
import { fetchCategory } from "./../api/categories";
export default {
  data() {
    return {
      loading: true,
      category: true,
    };
  },
  components: { FilterAside },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      this.loading = true;
      fetchCategory(this.$route.params.slug)
        .then((res) => {
          this.category = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .finally(() => (this.loading = false));
    },
  },
};
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
.section-title {
  margin-top: 40px;
}

.card-text {
  padding-top: 10px;
  position: absolute;
  left: 60px;
}

hr {
  margin: 0;
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
</style>
