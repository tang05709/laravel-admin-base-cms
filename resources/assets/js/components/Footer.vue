<template>
    <footer>
        <!--文章列表-->
        <span>
           地址： {{ results.address }} 备案： {{ results.copyright }} 
        </span>
    </footer>
</template>

<script>
    export default {
        data () {
            return {
                results: []
            }
        },
        mounted() {
             var that = this
             axios.get('/api/config')
            .then(function (response) {
                that.results = response.data.data
            });
        }
    }
</script>
