<template>
    <section class="login-zone rounded-end">
                    <form @click.prevent >
                        <div class="mb-3 ">
                            <label class="form-label" for="username_emial">E-mail <i class="fa fa-envelope"></i></label>
                            <input type="text" name="login" id="username_emial" class="form-control rounded-0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Le mot de passe <i class="fa fa-key"></i></label>
                            <input type="password" name="password" id="password" class="form-control rounded-0">
                        </div>
                        <div class="mb-2 text-center">
                            <base-button >Connexion <i class="fa fa-door-open"></i></base-button>
                        </div>

                        <div class="mb-2 text-center">
                            <base-button link to="register">S'inscrire <i class="fa fa-door-open"></i></base-button>
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
