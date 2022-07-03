<template>
  <div class="container-fluid log-reg-container">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p>Découvrez les excellents services que nous offrons</p>
        </div>
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
            class="col-6 col-md-3 col-lg-4"
            v-for="service in services"
            :key="service.$key"
          >
            <router-link
              :to="{ name: 'category', params: { slug: service.slug } }"
            >
              <div
                class="category-item"
                v-bind:style="{
                  'background-image': 'url(' + service.image + ')',
                }"
              >
                <h1 class="category-title">{{ service.category_name }}</h1>
                <p class="category-description">
                  {{ service.description }}
                </p>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import { fetchCategories } from "./../api/categories";

export default {
  data() {
    return {
      services: [],
      loading: true,
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      this.loading = true;
      fetchCategories()
        .then((res) => {
          this.services = res.data.data;
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

.category-item {
  position: relative;
  height: 300px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  margin: 1rem 0;
  border-radius: 10px;
  cursor: pointer;
}

.category-item:hover {
  background-size: 120%;
}
/* Top left text */
.category-title {
  position: absolute;
  top: 15px;
  left: 15px;
  color: white;
  font-size: 1.5em;
  transition: 5s;
}
.category-description {
  display: none;
  position: absolute;
  bottom: -15px;
  left: 0px;
  padding: 5px;
  color: white;
  font-size: 0.8em;
  width: 100%;
  background-color: rgb(0 0 0 / 53%);
  border-radius: 10px;
  transition: 5s;
  height: 30%;
  overflow-y: scroll;
}
.category-description::-webkit-scrollbar {
  display: none;
}
.category-item:hover .category-description {
  display: block;
}

img {
  pointer-events: none;
  padding: 10px;
}

/*img:hover {
    cursor: pointer;
}*/
</style>
