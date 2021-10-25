<template>
  <div class="card my-3">
    <div class="card-header">
        <h3 class="text-capitalize text-center font-weight-bolder">{{ post.title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ post.content }}</p>
        <div class="post_info">
          <div><span class="text-dark font-weight-bold">Author:</span> {{post.user.name}}</div>
          <div><span class="text-dark font-weight-bold">Category:</span>
            <span v-if="post.category" class="badge badge-pill text-light" v-bind:style="{backgroundColor: post.category.color}">{{ post.category.category }}</span>
            <span v-else>None</span>
          </div>
          <div><span class="text-dark font-weight-bold">Tags:</span>
            <div v-if="post.tag" class="d-inline-block">
              <span v-for="singleTag in post.tag" :key="singleTag.id" class="badge badge-pill text-light" v-bind:style="{backgroundColor: singleTag.color}">
                {{singleTag.tag}}
              </span>
            </div>
            <span v-else>None</span>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "PostCard",
    props: ['post'],
}
</script>

<style scoped>
.post_info {
  color: #9CB380;
}
</style>