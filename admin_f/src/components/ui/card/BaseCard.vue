<template>
        <div class="card rounded-0" :class="showShadow">
            <div class="card-body">
                <h5 class="card-title mb-3"><span>{{title}}</span></h5>
                <div class="row">
                    <slot></slot>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    props:['title','shadow'],
    computed:{
        showShadow(){
            return this.shadow == true ? 'card-shadow' :  'card-border';
        }
    }
}
</script>

<style scoped>
.card-shadow{
        box-shadow: 0px 1px 11px 0px #00000033;
}
.card-border{
    border: 1px solid rgba(0,0,0,.125);
}
h5 span{
    border-bottom: 3px solid #ff5b27;
}
.card{
    border-bottom: 3px solid #ff5927;
}
</style>