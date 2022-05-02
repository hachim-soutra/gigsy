<template>
    <section class="login-zone rounded-end">
                    <form @submit.prevent="submitForm" v-if="!isLoading" >
                        <div class="mb-3 ">
                            <label class="form-label" for="username_emial">E-mail <i class="fa fa-envelope"></i></label>
                            <input type="text" v-model.trim="email" name="login" id="username_emial" class="form-control rounded-0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Le mot de passe <i class="fa fa-key"></i></label>
                            <input type="password" v-model.trim="password" name="password" id="password" class="form-control rounded-0">
                        </div>
                        <div class="mb-2 text-center">
                            <base-button >Connexion <i class="fa fa-door-open"></i></base-button>
                        </div>

                        <div class="mb-2 text-center">
                            <base-button link to="register">S'inscrire <i class="fa fa-door-open"></i></base-button>
                        </div>
                    </form>
                    <!-- spinner-here -->
                    <warning-spinner v-else></warning-spinner>
                    <hr class="HrLine">
                    <div class="text-secondary copyright-text text-center">Copyright 2022 by AQAMINE. All Rights Reserved.</div>
                </section>
</template>

<script>
require ("../../assets/css/auth/auth.css");
import BaseButton from '../../components/ui/auth/BaseButton.vue';

export default {
    components:{BaseButton},
    data(){
        return{
            email: '',
            password:'',
            fromIsValid: true,
            isLoading:false
        };
    },
    methods:{
        async submitForm(){
            //rest
            this.fromIsValid = true;
            this.$store.commit('setErrors','');
            //validation
            if (this.password === '' || !this.email.includes('@') || this.email === ''){
                return this.showAlert('error','Compléter les informations utilisateur');
            }
            //Submit
            const actionPayload = {
                    email: this.email,
                    password: this.password,
                    
                };
                this.isLoading = true;
                await this.$store.dispatch('login',actionPayload);
                this.isLoading = false;

                if(!this.$store.getters.getErrors){
                    this.showAlert('success','Connexion réussie');
                    this.$router.replace({name : 'dashboard'});
                }else{
                    return this.showAlert('error','Email ou mot de passe incorrect');
                }

        }
    }
}
</script>
