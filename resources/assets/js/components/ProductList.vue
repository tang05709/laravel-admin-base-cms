<template>
    <ul>
        <!--文章列表-->
        <li v-for="product in results" :key="product.id">
            {{ product.title }} 
            <img :src="'/'+product.image" />
        </li>
    </ul>
</template>

<script>
    export default {
        data () {
            return {
                category: '',
                results: [],
                page: []
            }
        },
        mounted() {
             var that = this
             that.category = that.$route.params.category
             axios.get('/api/products/'+ that.category)
            .then(function (response) {
                that.results = response.data.data
                that.page = response.data.meta
            });
        }
    }
</script>
