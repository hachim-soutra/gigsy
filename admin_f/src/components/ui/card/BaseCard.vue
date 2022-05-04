<template>
        <div class="card">
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