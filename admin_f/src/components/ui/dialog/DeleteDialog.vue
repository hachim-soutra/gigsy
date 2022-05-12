<template>
    <div class="modal fade" id="showMessageModal" tabindex="-1" aria-labelledby="showMessageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- <div class="modal-header">
            <h5 class="modal-title" id="showMessageModalLabel">{{title}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body">
            <slot></slot>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-danger btn-sm" @click="deleteData" data-bs-dismiss="modal">{{command}}</button>
        </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    props:['title','command'],
    emits:['deleteFromModal'],
    methods:{
        deleteData(){
            this.$emit('deleteFromModal');
        }
    }
}
</script>

<style scoped>

</style>