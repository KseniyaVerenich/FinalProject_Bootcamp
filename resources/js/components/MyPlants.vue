<template>
    <div>

        

        <ul>
            <li v-for="plant in plants">
                {{plant.name}}

            </li>
        </ul>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                plants: []
            }
        },

        mounted () {
            console.log('component mounted');
            axios
            .get('/api/myplants')
            .then(response => this.plants = response.data); 

        },
    }
</script>

<style lang="scss" scoped>

</style>