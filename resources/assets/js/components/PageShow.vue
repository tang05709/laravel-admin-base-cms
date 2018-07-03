<template>
    <div>{{ results.content }}</div>
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
             console.log(that.category)
             axios.get('/api/pages/'+ that.category)
            .then(function (response) {
                that.results = response.data.data
                that.page = response.data.meta
            });
        }
    }
</script>
