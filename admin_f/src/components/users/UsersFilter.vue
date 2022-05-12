<template>
    <section>
        <div class="row">
                <div class="col-6   mb-1">
                    <div class="input-group">
                        
                        <input type="text" v-model="keyword" @keyup="findkeyword"  class="form-control rounded-0 search" placeholder="Rechercher par e-mail, numéro de téléphone ou nom d'utilisateur" aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div>

                </div>
                <div class="col-6   mb-1">
                    <button class="btn btn-light rounded-0"><i class="fa fa-plus"></i> Ajouter un utilisateur</button>
                    <button class="btn btn-light rounded-0" @click="refreshData"><i class="fa fa-arrow-rotate-right"></i> Rafraîchir <span v-if="isLoading" class="spinner-border text-warning spinner-border-sm" role="status" aria-hidden="true"></span></button>
                </div>
            </div>
    </section>
</template>

<script>
export default {
    emits:['forceRefresh','update:modelValue'],
    data(){
        return{
            isLoading: false,
            keyword:''
        }
    },
    methods:{
        async refreshData(){
            this.isLoading = true;
            await this.$emit('forceRefresh',true);
            this.isLoading = false;
        },
        findkeyword(){
            this.$emit('update:modelValue', this.keyword);
        }
    }
}
</script>

<style scoped>

</style>