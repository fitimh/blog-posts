<template>
  <div id="addBlog">
    <h1>Add blogs</h1>

    <div class="container">
      <div
        class="col-xl-11 col-lg-10 col-mb-8 col-sm-12 p-2 mb-3 w-50 justify-content-center"
      >
        <form class="justify-content-center">
          <div class="form-group">
            <label>Tittle Blog</label>
            <input
              v-model.lazy="blog.title"
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              required
            />
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Blog Content</label>
            <textarea class="form-control" v-model="blog.content"></textarea>
          </div>
        </form>
        <div id="preview">
          <h3>Preview Blog</h3>
          <p>Blog Tittle: {{ blog.title }}</p>
          <p>Blog Content: {{ blog.content }}</p>
        </div>
        <button class="btn bg-primary p-4 w-25 mb-3 mb-sm-5">Save</button>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      blog: {
        title: "",
        content: "",
      },
    };
  },
  methods: {},
};
</script>
<style scoped>
#row_style {
  margin-top: 30px;
}

#submit {
  display: block;
  margin: auto;
}
</style>
