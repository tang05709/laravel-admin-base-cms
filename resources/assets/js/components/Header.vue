<template>
    <ul>
        <!--分类列表-->
        <li v-for="category in results" :key="category.id">
            <a :href="['/'+category.module+'/'+category.id]">{{ category.title }} </a>
            <ul v-if="category.children != ''">
                <li v-for="child in category.children" :key="child.id">
                    <a :href="['/'+child.module+'/'+child.id]">{{ child.title }} </a>
                </li>
            </ul>
        </li>
    </ul>
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
             axios.get('/api/categories')
            .then(function (response) {
                that.results = response.data.data
            });
        }
    }
</script>
