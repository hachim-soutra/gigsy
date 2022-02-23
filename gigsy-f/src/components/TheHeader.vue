<template>
  <div class="container m-auto" id="navbar">
    <div class="home-navbar">
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Login' }"
          >Devenez vendeur</router-link
        >
      </div>
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Login' }">
          <img :src="require('./../assets/login.svg')" alt="login" />
          S'identifier
        </router-link>
      </div>
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Register' }">
          <img :src="require('./../assets/register.svg')" alt="register" />
          Rejoindre
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.home-navbar {
  display: flex;
  flex-direction: row;
  width: 100%;
  align-items: center;
  border-bottom: 2px solid var(--secondary-color);
}
.navbar-item {
  padding: 1rem 2rem;
}
.navbar-item:hover {
  padding: 1rem 2rem;
  background-color: var(--secondary-color);
}
</style>
