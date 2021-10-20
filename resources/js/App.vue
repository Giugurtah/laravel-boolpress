<template>
    <main>
        <PostHeader />
        <PostDisplay />
    </main>
</template>

<script>
import PostHeader from './components/PostHeader.vue';
import PostDisplay from './components/PostsDisplay.vue';
export default {
    name: 'App',
    components: {
        PostHeader,
        PostDisplay,
    },
}
</script>

<style scoped>
</style>