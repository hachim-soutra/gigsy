<template>
    <div>
        <delete-dialog title="avertissement" command="Supprimé" @deleteFromModal="deleteUser"><h5>Vous voulez vraiment supprimer cet utilisateur</h5></delete-dialog>
        <section>
            <base-card :shadow="true" title=" List des utilisateurs ">
                <users-filter  @forceRefresh="loadUsers" v-model="keyword" ></users-filter>
            </base-card>
        </section>
        <section>
            <base-card class="mt-3">
            <warning-spinner v-if="isLoading"></warning-spinner>
                <base-table v-else-if="haseUsers">
                    <template v-slot:default>
                        <th >#</th>
                        <th >Nom complet</th>
                        <th >E-mail</th>
                        <th >Modifier</th>
                        <th >Supprimer</th>
                    </template>
                    <template v-slot:tableBody>
                    
                        <tr v-for="user in filtredUsers" :key="user.id">
                            <th scope="row">{{user.id}}</th>
                            <td>{{user.fullname}}</td>
                            <td>{{user.email}}</td>
                            <td><rounded-button type="success"><i class="fa fa-edit"></i></rounded-button></td>
                            <td><rounded-button data-bs-toggle="modal" data-bs-target="#showMessageModal" type="danger" @click="passUserId(user.id)"><i class="fa fa-trash"></i></rounded-button></td>
                        </tr>
                    </template>
                </base-table>
                <h4 class="text-secondary" v-else>Aucun utilisateur trouvé</h4>
            </base-card>
        </section>
        
    </div>
</template>

<script>
import UsersFilter from "../../components/users/UsersFilter.vue"
import BaseTable from "../../components/ui/tables/BaseTable.vue"

export default {
    components:{UsersFilter,BaseTable},
    data(){
        return{
            isLoading: false,
            keyword:'',
            deleteId:null,
            

        }
    },
    created(){
        this.loadUsers();
        
    },
    methods:{
        showRequestResult(){
            if(this.$store.getters['users/errors']){
                this.showAlert('error',this.$store.getters['users/errors']);
                this.$store.commit('users/setErrors' , null);
            }else if(this.$store.getters['users/success']){
                this.showAlert('success',this.$store.getters['users/success']);
                this.$store.commit('users/setSuccess' , null);
            }else{return;}
        },
        async loadUsers(refresh = false){
            this.isLoading = true;
            await this.$store.dispatch('users/loadUsers', {forceRefresh: refresh});
            this.showRequestResult();
            this.isLoading = false;
        },
        passUserId(id){
            this.deleteId = id;
        },
        async deleteUser(){
            this.isLoading = true
            await this.$store.dispatch('users/deleteUser' , { id: this.deleteId });
            this.showRequestResult();
            this.isLoading = false;

            this.deleteId = null;
        }
    },
    computed:{
        users(){
            return this.$store.getters['users/users'];
        },
        haseUsers(){
            return !this.isLoading && this.$store.getters['users/hasUsers'];
        },
        filtredUsers(){
            return this.users.filter(user => {
                return user.fullname.match(this.keyword) || user.email.match(this.keyword)
            })
        }
        
        
    }
    
}
</script>


<style scoped>

tr {
    width: 100%;
    display: inline-table;
    table-layout: fixed;
}
</style>