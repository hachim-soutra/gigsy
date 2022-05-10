<template>
    <section>
        <base-card :shadow="true" title=" List des utilisateurs ">
            <users-filter></users-filter>
        </base-card>
    </section>
</template>

<script>
import UsersFilter from "../../components/users/UsersFilter.vue"

export default {
    components:{UsersFilter}
}
</script>
<style scoped>

</style>