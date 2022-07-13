<template>
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light">
          <router-link :to="{ name: 'home' }"><span>Gigsy</span></router-link>
        </h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li>
            <router-link :to="{ name: 'home', hash: '#header' }"
              >Accueil</router-link
            >
          </li>
          <li>
            <router-link :to="{ name: 'home', hash: '#about' }"
              >A-propos</router-link
            >
          </li>
          <li>
            <router-link :to="{ name: 'categories' }">Categories</router-link>
          </li>
          <li>
            <router-link :to="{ name: 'home', hash: '#portfolio' }"
              >Portefeuille</router-link
            >
          </li>
          <li>
            <router-link :to="{ name: 'home', hash: '#team' }"
              >Equipe</router-link
            >
          </li>
          <li>
            <router-link :to="{ name: 'home', hash: '#contact' }"
              >Contactez-nous</router-link
            >
          </li>

          <template v-if="!user.data">
            <li class="get-started">
              <router-link :to="{ name: 'login' }">Login</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'register' }">Register</router-link>
            </li>
          </template>
          <template v-else>
            <li class="">
              <router-link class="menu-item-link" :to="{ name: 'cart.profil' }">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-danger">3</span>
              </router-link>
            </li>
            <li>
              <router-link
                class="menu-item-link"
                :to="{ name: 'messages.profil' }"
              >
                <i class="fa fa-envelope"></i>
                <span class="badge badge-danger">5</span>
              </router-link>
            </li>
            <li>
              <router-link
                class="menu-item-link"
                :to="{ name: 'notifications.profil' }"
              >
                <i class="fa fa-bell"></i>
                <span class="badge badge-danger">10</span>
              </router-link>
            </li>
            <li class="dropdown">
              <button
                class="btn btn-default profile-img"
                type="button"
                data-toggle="dropdown"
              >
                {{ user.data.first_name | TwoLetter }}
              </button>
              <ul class="dropdown-menu">
                <li>
                  <router-link :to="{ name: 'profil' }">
                    <i class="fa fa-fw fa-user"></i>
                    {{ user.data.first_name }}
                    {{ user.data.last_name }}</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'service.profil' }">
                    <i class="fa fa-fw fa-bookmark"></i> My services
                  </router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'credit.profil' }">
                    <i class="fa fa-fw fa-usd"></i>
                    Sold
                  </router-link>
                </li>
                <li>
                  <a href="#"> <i class="fa fa-fw fa-sign-out"></i> Log out</a>
                </li>
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
a.menu-item-link {
  position: relative;
}
.badge {
  padding: 0;
  width: 19px;
  height: 19px;
  padding: 0 !important;
  border-radius: 50%;
  margin: 0;
  vertical-align: middle;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  right: 0;
}
</style>
