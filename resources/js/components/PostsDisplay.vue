<template>
    <div id="post_display" class="container">
        <div v-if="posts.length > 0">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
        <div v-else>
            Array vuoto
        </div>
    </div>
</template>

<script>
import PostCard from "./PostCard.vue";
export default {
    name: 'PostDisplay',
    components: {
        PostCard,
    },
    data() {
        return {
            posts: [],
        }
    },
    created: function(){
        axios.get('http://127.0.0.1:8000/api/posts').then(res => {
            console.log(res.data.posts.data);
            this.posts = res.data.posts.data;
        })
    }
}
</script>

<style scoped>
h1 {
    font-family: 'Bebas Neue', cursive;
    color: #9CB380;
}
</style>