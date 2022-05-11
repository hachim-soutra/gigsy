<template>
    <div>
        <section>
            <base-card :shadow="true" title=" List des utilisateurs ">
                <users-filter></users-filter>
            </base-card>
        </section>
        <section>
            <base-card class="mt-3">
                <base-table>
                    <template v-slot:default>
                        <th >#</th>
                        <th >Nom complet</th>
                        <th >E-mail</th>
                        <th >Modifier</th>
                        <th >Supprimer</th>
                    </template>
                    <template v-slot:tableBody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Amine Aqebli</td>
                            <td>admin@admin.com</td>
                            <td><rounded-button type="success"><i class="fa fa-edit"></i></rounded-button></td>
                            <td><rounded-button type="danger"><i class="fa fa-trash"></i></rounded-button></td>
                        </tr>
                    </template>
                </base-table>
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
            users: []
        }
    },
    mounted(){
        this.users = this.$store.getters['users/users'];
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