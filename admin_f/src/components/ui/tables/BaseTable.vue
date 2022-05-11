<template>

    <table class="table table-striped">
        <thead>
            <tr>
                <slot></slot>
            </tr>
        </thead>
        <tbody>
            <slot name="tableBody"></slot>
        </tbody>
    </table>

</template>

<style scoped>

thead{
    background-color: #ff5b27;
}


tr {
    width: 100%;
    display: inline-table;
    table-layout: fixed;
}

table{
    /* height:300px;               */
    display: -moz-groupbox;    
}
tbody{
    overflow-y: scroll;  
    /* height: 300px;             */
    width: 100%;
    /* position:absolute */
}
</style>