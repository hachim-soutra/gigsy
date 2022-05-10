<template>
        <div class="card rounded-0">
            <div class="card-body">
                <h5 class="card-title">{{title}}</h5>
                <div class="row">
                    <slot></slot>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    props:['title']
}
</script>

<style scoped>
.card{
        box-shadow: 0px 1px 11px 0px #00000033;
}

</style>