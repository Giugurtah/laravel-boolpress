<template>
  <div class="card my-3">
    <div class="card-header">
        <h3 class="text-capitalize text-center font-weight-bolder">{{ post.title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ post.content }}</p>
        <div class="post_info">
          <div>Author: {{post.user.name}}</div>
          <div>Category: {{getCategory()}}</div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "PostCard",
    props: ['post'],
    methods: {
      getCategory: function(){
        if(this.post.category_id == null) {
          return "Nessuna categoria"
        }
        return this.post.category.category
      }
    }
}
</script>

<style scoped>
.post_info {
  color: #9CB380;
}
</style>