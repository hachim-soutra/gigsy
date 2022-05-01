
<template>
    <button class="btn btn-primary cus-btn" v-if="!link" >
        <slot></slot>
    </button>
    <router-link class="btn btn-primary cus-btn" v-else :to="to" >
        <slot></slot>
    </router-link>
</template>
<script>
export default {
    props: {
        
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