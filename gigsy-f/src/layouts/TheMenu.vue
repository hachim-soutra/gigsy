<template>
  <div class="home-navbar">
    <div class="container m-auto d-flex">
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Login' }"
          >Devenez vendeur</router-link
        >
      </div>
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Login' }">
          S'identifier
        </router-link>
      </div>
      <div class="navbar-item">
        <router-link class="navbar-link" :to="{ name: 'Register' }">
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
  color: var(--text-color);
  cursor: pointer;
}
.navbar-item:hover {
  padding: 1rem 2rem;
  background-color: var(--secondary-color);
}
</style>
