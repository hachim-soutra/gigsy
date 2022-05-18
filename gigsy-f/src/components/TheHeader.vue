<template>
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light">
          <router-link :to="{ name: 'home' }"
            ><span>Ninestars</span></router-link
          >
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>

          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started">
            <router-link :to="{ name: 'login' }">S'identifier</router-link>
          </li>
          <li>
            <router-link :to="{ name: 'register' }">S'inscrire</router-link>
          </li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
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
