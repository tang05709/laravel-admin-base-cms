<template>
    <ul>
        <!--文章列表-->
        <li v-for="article in results" :key="article.id">
            {{ article.title }} 
            <img :src="'/'+article.image" />
        </li>
    </ul>
</template>

<script>
    export default {
        data () {
            return {
                results: [],
                page: []
            }
        },
        mounted() {
             var that = this
             axios.get('/api/articles')
            .then(function (response) {
                that.results = response.data.data
                that.page = response.data.meta
            });
        }
    }
</script>
