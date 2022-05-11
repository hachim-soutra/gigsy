
<template>
    <button class="btn rounded-circle" :class="type" v-if="!link" >
        <slot></slot>
    </button>
    <router-link class="btn rounded-circle" :class="type" v-else :to="to" >
        <slot></slot>
    </router-link>
</template>
<script>
export default {
    props: {
        type :{
            type: String,
            default: 'success'
        },
        link:{
            type: Boolean,
            required: false,
            default: false
        },
        to: {
            type: String,
            required : false,
            default: '/'
        }
    }
}
</script>

<style scoped>
.btn{
    transition: all 0.3s ease-in;
}
.danger{
    color: #fff;
    background-color: #ff0000b0 !important;
    border: 1px solid red;
}
.danger:hover{
    color: #fff;
    background-color: #ff0000de !important;
    border: 1px solid #f72f2f;
}
.success{
    color: #fff;
    background-color: #198754 !important;
    border: #1987;
}
.success:hover{
    color: #fff;
    background-color: #1a8151;
    border-color: #146c43;
}
.warning{
    color: #000;
    background-color: #ffc107;
    border-color: #ffc107;
}
.warning:hover{
    color: #000;
    background-color: #ffca2c;
    border-color: #ffc720;
}
.dark{
        color: #fff;
    background-color: #212529;
    border-color: #212529;
}
.dark:hover{
    color: #fff;
    background-color: #1c1f23;
    border-color: #1a1e21;
}
</style>