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
              <a class="" href="/cart" data-badge="1">
                <i class="fa fa-shopping-cart"></i>
              </a>
            </li>
            <li class="hide-xs-only">
              <a class="" href="/messages">
                <i class="fa fa-envelope"></i>
              </a>
            </li>
            <li class="">
              <a class="" href="/notifications">
                <i class="fa fa-bell"></i>
              </a>
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
                  <a href="#">
                    <i class="fa fa-fw fa-user"></i>
                    {{ user.data.first_name }} {{ user.data.last_name }}</a
                  >
                </li>
                <li>
                  <a href="/collections">
                    <i class="fa fa-fw fa-bookmark"></i> My services
                  </a>
                </li>
                <li>
                  <a href="/credit">
                    <i class="fa fa-fw fa-usd"></i>
                    sold
                  </a>
                </li>
                <li>
                  <a href="/account/profile">
                    <i class="fa fa-fw fa-sliders"></i>
                    Parameters
                  </a>
                </li>
                <li class="hsoub-dropdown-item hsoub-dropdown-divider">
                  <a href="https://accounts.hsoub.com/edit" target="_blank">
                    <i class="fa fa-fw fa-edit"></i>
                    Update compte
                  </a>
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
</style>
