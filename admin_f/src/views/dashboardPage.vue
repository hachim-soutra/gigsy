<template>
    
    <section class="mt-4">
        <h2>Dashboard</h2>
        <div class="container">
        <div class="row">
            <base-card title="Surbrillance">
                <number-card color="bg-c-yellow" icon="fa-users"></number-card>
                <number-card color="bg-c-pink" icon="fa-shop"></number-card>
                <number-card color="bg-c-green" icon="fa-credit-card"></number-card>
                <number-card color="bg-c-blue" icon="fa-credit-card"></number-card>
            </base-card>
            
        </div>
    </div>
    </section>
</template>

<script>
import NumberCard from '../components/ui/card/NumberCard.vue'
export default {
    components:{NumberCard}
}
</script>