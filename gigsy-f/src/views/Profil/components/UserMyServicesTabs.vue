<template>
  <div class="row o-layout--flex py-3 m-0">
    <div class="col-12 profile_navbar p-0">
      <div class="o-layout--flex profile_navbar__title">
        <span>
          <div
            data-tab-index="0"
            class="col profile_navbar__title-item px-4 py-2"
            :class="{ 'profile_navbar__title-item--active': toggleProfil == 1 }"
            @click="fetchMyServicesActive"
          >
            <i class="fa fa-fw fa-user"></i>My services active

            <span
              class="badge badge-success ml-2"
              v-if="this.toggleProfil == 1"
            >
              {{ services.length }}
            </span>
          </div>
        </span>

        <span>
          <div
            data-tab-index="2"
            class="col profile_navbar__title-item px-4 py-2"
            :class="{ 'profile_navbar__title-item--active': toggleProfil == 2 }"
            @click="fetchMyServicesPending"
          >
            <i class="fa fa-fw fa-briefcase"></i>
            My services pending
            <span
              class="badge badge-success ml-2"
              v-if="this.toggleProfil == 2"
            >
              {{ services.length }}
            </span>
          </div>
        </span>
        <span>
          <div
            data-tab-index="2"
            class="col profile_navbar__title-item px-4 py-2"
            :class="{ 'profile_navbar__title-item--active': toggleProfil == 3 }"
            @click="toggleProfil = 3"
          >
            <i class="fa fa-fw fa-briefcase"></i>
            ajouter service
          </div>
        </span>
      </div>
    </div>
    <div class="row bg-gray m-0 w-100" v-if="this.toggleProfil == 1">
      <div class="col-12">
        <UserProfilCard title="Mes services">
          <div class="row">
            <div
              class="col-md-4 d-flex align-items-stretch"
              v-for="service in services"
              :key="service.$key"
            >
              <Gigs :service="service" />
            </div>
          </div>
        </UserProfilCard>
      </div>
    </div>
    <div class="row bg-gray m-0 w-100" v-if="toggleProfil == 2">
      <div class="col-12">
        <UserProfilCard title="Mes services">
          <div class="row">
            <div
              class="col-md-4 d-flex align-items-stretch"
              v-for="service in services"
              :key="service.$key"
            >
              <Gigs :service="service" />
            </div>
          </div>
        </UserProfilCard>
      </div>
    </div>
    <div class="row bg-gray m-0 w-100 jus" v-if="toggleProfil == 3">
      <div class="col-12">
        <UserProfilCard title="ajouter service">
          <div class="row">
            <form
              @submit.prevent="register"
              @keydown="form.onKeydown($event)"
              class="container row"
            >
              <div class="form-group col-12">
                <label for="name">Title</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.name"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                />
                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('name')"
                >
                  {{ form.errors.get("name") }}
                </div>
              </div>
              <div class="form-group col-6">
                <label for="image">Image</label>
                <input
                  @change="onFileChange"
                  class="form-control"
                  id="image"
                  :class="{ 'is-invalid': form.errors.has('image') }"
                  type="file"
                  accept="image/*"
                />
                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('image')"
                >
                  {{ form.errors.get("image") }}
                </div>
              </div>

              <div class="form-group col-6">
                <label for="name">Prix</label>
                <input
                  type="number"
                  class="form-control"
                  v-model="form.price"
                  :class="{ 'is-invalid': form.errors.has('price') }"
                />
                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('price')"
                >
                  {{ form.errors.get("price") }}
                </div>
              </div>
              <div class="form-group col-6">
                <label for="name">livraison (jour)</label>
                <input
                  type="number"
                  class="form-control"
                  v-model="form.livraison"
                  :class="{ 'is-invalid': form.errors.has('livraison') }"
                />

                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('livraison')"
                >
                  {{ form.errors.get("livraison") }}
                </div>
              </div>
              <div class="form-group col-6">
                <label for="name">Categorie</label>

                <select
                  class="form-control"
                  v-model="form.category_id"
                  :class="{ 'is-invalid': form.errors.has('category_id') }"
                >
                  <option
                    :value="category.id"
                    v-for="category in categories"
                    :key="category.$key"
                  >
                    {{ category.category_name }}
                  </option>
                </select>

                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('category_id')"
                >
                  {{ form.errors.get("category_id") }}
                </div>
              </div>
              <div class="form-group col-12">
                <label for="description">Description</label>
                <textarea
                  class="form-control"
                  name="description"
                  id="description"
                  :class="{ 'is-invalid': form.errors.has('description') }"
                  cols="30"
                  rows="10"
                  v-model="form.description"
                >
                </textarea>
                <div
                  class="invalid-feedback text-left"
                  v-if="form.errors.has('description')"
                >
                  {{ form.errors.get("description") }}
                </div>
              </div>

              <div class="text-center">
                <button type="submit" :disabled="form.busy">Ajouter</button>
              </div>
            </form>
          </div>
        </UserProfilCard>
      </div>
    </div>
  </div>
</template>

<script>
import UserProfilCard from "./UserProfilCard.vue";
import Gigs from "../../../components/Gigs.vue";
import ApiService from "../../../services/api.service";
import Form from "vform";

export default {
  data: () => ({
    toggleProfil: 1,
    services: [],
    categories: [],
    loading: false,
    form: new Form({
      image: null,
      seller_id: null,
      category_id: null,
      galeries: [],
      name: "",
      description: "",
      price: "",
      livraison: "",
    }),
  }),
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
  },
  components: { UserProfilCard, Gigs },
  mounted() {
    this.form.seller_id = this.getData.id;
    this.fetchMyServicesActive();
    this.fetchMyCategories();
  },
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.form.image = files[0];
    },
    onFileChangeGaleries(e) {
      console.log(e.target.files);
      for (let i = 0; i < this.$refs.files.files.length; i++) {
        this.form.galeries.push(this.$refs.files.files[i]);
      }
    },
    fetchMyCategories() {
      this.toggleProfil = 1;
      ApiService.get("api/v1/categories/list")
        .then((res) => {
          this.categories = res.data.data;
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
          });
        });
    },
    fetchMyServicesActive() {
      this.toggleProfil = 1;
      ApiService.get("api/v1/seller/services/filter/1/" + this.getData.id)
        .then((res) => {
          this.services = res.data.data;
          this.$toasted.success(res.data.message, {
            singleton: true,
          });
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
          });
        });
    },
    fetchMyServicesPending() {
      this.toggleProfil = 2;
      ApiService.get("api/v1/seller/services/filter/0/" + this.getData.id)
        .then((res) => {
          this.services = res.data.data;
          this.$toasted.success(res.data.message, {
            singleton: true,
          });
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
          });
        });
    },
    register() {
      this.form
        .post("/api/v1/services")
        .then(async (response) => {
          this.form.reset();
          this.$toasted.success(response.data.message);
          this.fetchMyServicesPending();
        })
        .catch(({ response }) => {
          this.$toasted.error(response.data.message, {
            singleton: true,
          });
        });
    },
  },
};
</script>

<style scoped>
.o-layout--flex,
.c_block-grid {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  min-width: 100%;
}

.c-button {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.8em;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.c-button--primary,
.c-button--primary.c-button--ghost:hover {
  color: #fff !important;
  background-color: #52b035 !important;
  border-color: #52b035 !important;
}
a {
  text-decoration: none;
  color: #222222;
}
.profile_navbar__title-item--active {
  background: #f1f1f1;
  color: #314459;
}
.profile_navbar__title-item {
  height: 62px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  padding-top: 16px;
  padding-bottom: 16px;
  color: #575858;
  font-family: "Noto Kufi Arabic", "Open Sans", sans-serif;
  font-size: 15px;
}
.bg-gray {
  background: #f1f1f1;
}
label {
  text-align: left;
  width: 100%;
  padding-left: 1rem;
}
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
</style>
