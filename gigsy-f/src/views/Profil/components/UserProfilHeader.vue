<template>
  <section class="user-profile-header">
    <div class="container">
      <div class="u-text--center middle-content">
        <div class="relative">
          <img
            class="u-circle img-shadow"
            :src="getData.user.img"
            width="128"
            height="128"
          />

          <img
            class="verification-badge"
            src="https://khamsat.hsoubcdn.com/assets/images/verification-badge-f5965383075555aa8eee4d3e33aff856645f43585e7ac1fa56eed14203f46e00.svg"
          />
        </div>

        <h1 class="username">
          {{ getData.user.fullname }}

          <span class="sup" v-if="getData.online">
            <i class="fa fa-circle text-success"></i>
          </span>
        </h1>
        <ul class="details-list p-0">
          <li>
            <i class="fa fa-fw fa-user"></i>
            {{ getData.status_name }}
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  computed: {
    getData() {
      return this.$store.state.user.data;
    },
  },
};
</script>

<style scoped>
.user-profile-header .relative {
  position: relative;
  width: 128px;
  height: 128px;
  margin: auto;
}

.middle-content .img-shadow {
  box-shadow: 0 0 3px 1px rgb(0 0 0 / 5%) !important;
}
.img-shadow {
  background-color: #fff;
  transition: all 0.2s ease-in-out;
  border: 1px solid rgba(0, 0, 0, 0.06);
}
.u-circle {
  border-radius: 50%;
}
.user-profile-header .verification-badge {
  position: absolute;
  top: 67%;
  right: 0px;
}

.sup {
  font-size: 13px;
  position: relative;
  vertical-align: baseline;
  top: -0.5em;
}

.user-profile-header .details-list {
  list-style: none;
  margin: 0;
  margin-top: -5px;
}
</style>
