<template>
    
    <section class="mt-4">
        <!-- <h2>Dashboard</h2> -->
        <div class="container">
        <div class="row">
            <base-card title="Surbrillance">
                <number-card color="bg-c-yellow" icon="fa-users" title="Nombre d'utilisateur" number="50"></number-card>
                <number-card color="bg-c-pink" icon="fa-shop" title="Nombre de vendeurs" number="50"></number-card>
                <number-card color="bg-c-green" icon="fa-cart-flatbed" title="Nombre d'acheteurs" number="500"></number-card>
                <number-card color="bg-c-blue" icon="fa-chart-line" title="Nombre de commandes" number="450"></number-card>
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