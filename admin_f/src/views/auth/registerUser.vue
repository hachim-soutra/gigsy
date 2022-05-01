<template>
    <section class="login-zone rounded-end">
                    <form @click.prevent="">
                        <div class="mb-3 ">
                            <label class="form-label" for="lastName">Le nom</label>
                            <input type="text" name="lastName" id="lastName" class="form-control rounded-0">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="firstName">Prénom </label>
                            <input type="text" name="firstName" id="firstName" class="form-control rounded-0">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="username_emial">E-mail </label>
                            <input type="text" name="login" id="username_emial" class="form-control rounded-0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Le mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control rounded-0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirmer votre mot de passe </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-0">
                        </div>
                        <div class="mb-2 text-center">
                            <base-button >S'inscrire <i class="fa fa-user-plus"></i></base-button>
                            
                        </div>
                        <div class="mb-2 text-center">
                            <base-button link to="login">Connexion <i class="fa fa-door-open"></i></base-button>
                        </div>
                    </form>
                    <!-- spinner-here -->
                    <warning-spinner v-if="0"></warning-spinner>
                    <hr class="HrLine">
                    <div class="text-secondary copyright-text text-center">Copyright 2022 by AQAMINE. All Rights Reserved.</div>
                </section>
</template>

<script>
require ("../../assets/css/auth/auth.css");
import BaseButton from '../../components/ui/auth/BaseButton.vue';
export default {
    components:{BaseButton},
}
</script>
