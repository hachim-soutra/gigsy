<template>
  <router-view></router-view>
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

</style>
