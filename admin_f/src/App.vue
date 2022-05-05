<template>
  <the-header v-if="isAuthenticated"></the-header>
  <div class="container-fluid">
    <div class="row">
        <the-sidebar v-if="isAuthenticated"></the-sidebar>
        <main :class="printClass" class="mt-4">
            <router-view v-slot="slotProps" mode="out-in">
              <transition name="route">
                <component :is="slotProps.Component"></component>
              </transition>
            </router-view>
        </main>
    </div>
  </div>
</template>

<script>
export default{
  
  created(){
    //auth
    this.$store.dispatch('tryLogin');
  },
  computed:{
    //auth
    didAutoLogout(){
          return this.$store.getters.didAutoLogout;
        },
    //show/hide sideBar and NaveBar
    isAuthenticated(){
          return this.$store.getters.isAuthenticated;
    },
    printClass(){
      return this.$store.getters.isAuthenticated? 'col-md-9 ms-sm-auto col-lg-10 px-md-4' : '';
    }
    
  },
  watch:{
    //auth
    didAutoLogout(curValue, oldValue){
        if(curValue && curValue !== oldValue){
          this.$router.replace({name : 'dashboard'}); 
        }
    }
  }
}


</script>
<style>
*{
  font-family: 'Montserrat', sans-serif;
}
body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

/*Start Route Animation*/
.route-enter-from {
  opacity: 0;
  transform: translateY(-30px);
}
.route-leave-to {
  opacity: 0;
  transform: translateY(30px);
}
.route-enter-active {
  transition: all 0.3s ease-out;
}
.route-leave-active {
  transition: all 0.3s ease-in;
}
.route-enter-to,
.route-leave-from {
  opacity: 1;
  transform: translateY(0);
}
/*End Route Animation*/
</style>
