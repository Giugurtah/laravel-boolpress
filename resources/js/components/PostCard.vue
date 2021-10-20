<template>
  <div class="card my-3">
    <div class="card-header">
        <h3 class="text-capitalize">{{ post.title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ post.content }}</p>
    </div>
  </div>
</template>

<script>
export default {
    name: "PostCard",
    props: ['post'],
}
</script>

<style>

</style>