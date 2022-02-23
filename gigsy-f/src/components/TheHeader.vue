<template>
  <div class="container m-auto" id="navbar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img :src="require('./../assets/logo.svg')" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav navbar-handler">
            <li class="nav-item">
              <router-link class="nav-link-btn" :to="{ name: 'Login' }"
                >Devenez vendeur</router-link
              >
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{ name: 'Login' }">
                <img :src="require('./../assets/login.svg')" alt="login" />
                S'identifier</router-link
              >
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{ name: 'Login' }">
                <img
                  :src="require('./../assets/register.svg')"
                  alt="register"
                />
                Rejoindre</router-link
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {};
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
</style>
