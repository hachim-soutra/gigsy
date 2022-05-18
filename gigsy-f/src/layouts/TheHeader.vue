<template>
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light">
          <router-link :to="{ name: 'home' }"
            ><span>Ninestars</span></router-link
          >
        </h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>

          <li><a href="#contact">Contact Us</a></li>
          <template v-if="!user.data">
            <li class="get-started">
              <router-link :to="{ name: 'login' }">Login</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'register' }">Register</router-link>
            </li>
          </template>
          <template v-else>
            <li class="dropdown">
              <button
                class="btn btn-default profile-img"
                type="button"
                data-toggle="dropdown"
              >
                {{ user.data.first_name | TwoLetter }}
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">My profil</a></li>
                <li><a href="#">Log out</a></li>
              </ul>
            </li>
          </template>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
</template>

<script>
import userMixin from "../common/mixins/user.js";
export default {
  mixins: [userMixin],
  filters: {
    TwoLetter: function (value) {
      if (!value) return "";
      value = value.toString();
      return value.substring(0, 2);
    },
  },
};
</script>

<style scoped>
.nav-link {
  color: var(--text-color);
  cursor: pointer;
}
.nav-link-btn {
  color: var(--text-color);
  background-color: var(--secondary-color);
  padding: 8px 20px;
  border-radius: 20px;
  cursor: pointer;
}
.navbar-handler {
  align-items: center;
  column-gap: 2rem;
  width: 100%;
  display: flex;
  justify-content: end;
}
.profile-img {
  -webkit-border-radius: 50%;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--secondary-color);
  color: white;
  height: 45px;
  width: 45px;
  cursor: pointer;
}
</style>
