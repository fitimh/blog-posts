<template>
<div class="posts">
  <form action="" @submit="createPost(post)">
    <h4 class="text-center font-weight-bold">Post creation form</h4>
    <div class="form-group">
      <input
        type="text"
        placeholder="Post title"
        v-model="post.title"
        class="form-control"
      />
    </div>
    <div class="form-group">
      <textarea
        v-model="post.desc"
        placeholder="Post content"
        class="form-control"
      >
      </textarea>
    </div>
    <div class="form-group">
      <button
        :disabled="!isValid"
        class="btn btn-block btn-primary"
        @click.prevent="addPost(post)"
      >
        Submit
      </button>
    </div>
  </form>
  </div>
</template>

<script>
export default {
  name: "CreatePost",
  data() {
    return {
      post: {
        title: "",
        desc: "",
      },
    };
  },
  methods: {
   
     addPost(post)
    {
      this.$store.dispatch('add',post);
      console.log(post)
    },
  },
  computed: {
    isValid() {
      return this.post.title !== "" && this.post.desc !== "";
    },
  },
};
</script>

<style scoped></style>
