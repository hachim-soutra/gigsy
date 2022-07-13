<template>
  <div class="row o-layout--flex py-3 m-0">
    <div class="col-12 profile_navbar p-0">
      <div class="o-layout--flex profile_navbar__title">
        <span>
          <div
            data-tab-index="0"
            class="col profile_navbar__title-item px-4 py-2"
            :class="{ 'profile_navbar__title-item--active': toggleProfil == 1 }"
            @click="toggleProfil = 1"
          >
            <i class="fa fa-fw fa-user"></i>My services active
          </div>
        </span>

        <span>
          <div
            data-tab-index="2"
            class="col profile_navbar__title-item px-4 py-2"
            :class="{ 'profile_navbar__title-item--active': toggleProfil != 1 }"
            @click="toggleProfil = 0"
          >
            <i class="fa fa-fw fa-briefcase"></i>
            My services pending
          </div>
        </span>
      </div>
    </div>
    <div class="row bg-gray m-0 w-100" v-if="toggleProfil == 1">
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
    <div class="row bg-gray m-0 w-100 jus" v-else>
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
  </div>
</template>

<script>
import UserProfilCard from "./UserProfilCard.vue";
import Gigs from "../../../components/Gigs.vue";
export default {
  data: () => ({
    toggleProfil: 1,
  }),
  components: { UserProfilCard, Gigs },
  props: ["services"],
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
</style>
