<template>
    <section class="login-zone rounded-end">
                    <!-- spinner-here -->
                    <warning-spinner v-if="isLoading"></warning-spinner>
                    <form v-else @submit.prevent="submitForm">
                        <div class="mb-3 ">
                            <label class="form-label" for="lastName">Le nom</label>
                            <input type="text" v-model.trim="lastName" id="lastName" class="form-control rounded-0">
                            <span v-if="getErrors.last_name" class="error">{{getErrors.last_name[0]}}</span>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="firstName">Prénom </label>
                            <input type="text" v-model.trim="firstName" id="firstName" class="form-control rounded-0">
                            <span v-if="getErrors.first_name" class="error">{{getErrors.first_name[0]}}</span>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="username_emial">E-mail </label>
                            <input type="text" v-model.trim="email" id="username_emial" class="form-control rounded-0">
                            <span v-if="getErrors.email" class="error">{{getErrors.email[0]}}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Le mot de passe</label>
                            <input type="password" v-model.trim="password"  id="password" class="form-control rounded-0">
                            <span v-if="getErrors.password" class="error">{{getErrors.password[0]}}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirmer votre mot de passe </label>
                            <input type="password" v-model.trim="confirmPassword" id="password_confirmation" class="form-control rounded-0">
                            <span v-if="getErrors.password_confirmation" class="error">{{getErrors.password_confirmation[0]}}</span>
                        </div>
                        <div class="mb-2 text-center">
                            <base-button >S'inscrire <i class="fa fa-user-plus"></i></base-button>
                            
                        </div>
                        <div class="mb-2 text-center">
                            <base-button link to="login">Connexion <i class="fa fa-door-open"></i></base-button>
                        </div>
                    </form>
                    
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
        return {
            firstName: '',
            lastName:'',
            email: '',
            password: '',
            confirmPassword: '',
            isLoading: false
        }
    },
    computed:{
        getErrors(){
            return this.$store.getters.getErrors;
        }
    },
    methods:{
        async submitForm(){
            this.$store.commit('setErrors','');

            const actionPayload = {
                first_name: this.firstName,
                last_name: this.lastName,
                email: this.email,
                password: this.password,
                password_confirmation: this.confirmPassword
            }

            this.isLoading = true;
            await this.$store.dispatch('signup',actionPayload);
            this.isLoading = false;

            if(!this.$store.getters.getErrors){
                    this.showAlert('success','Inscription réussie');
                    this.$router.replace({name : 'login'});
                }else{
                    return this.showAlert('error','Vérifiez vos informations et réessayez');
                }
        }
    }
}
</script>

<style scoped>
.error{
    font-size: 12px;
    color: rgb(255, 0, 0);
}
</style>