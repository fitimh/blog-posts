<template>
  <div id="addBlog">
    <div class="container">
      <div class="blogs d-flex position-relative justify-content-center">
        <div
          class="col-xl-11 col-lg-10 col-mb-8 col-sm-12 p-2 mb-3 w-50 justify-content-center"
        >
          <h1>Add blogs</h1>
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
              <textarea
                class="form-control"
                v-model.lazy="blog.content"
              ></textarea>
            </div>
            <div class="form-group" id="checkboxes">
              <label>Ninjas</label>
              <input type="checkbox" value="" v-model="blog.categories"/>
              <label>BLla</label>
              <input type="checkbox" value="" v-model="blog.categories"/>

              <label>testt</label>
              <input type="checkbox" value="" v-model="blog.categories"/>

              <label>test11</label>
              <input type="checkbox" value="" v-model="blog.categories"/>

            
            </div>
            <div class="form-group">
              <img :src="previewImage" class="uploading-image" width="350" height="220" />
              <input type="file" accept="image/jpeg" @change="uploadImage" />
            </div>
          </form>
          <div id="preview" class="p-2 mt-2 shadow-sm shadow-lg">
            <h3>Preview Blog</h3>
            <p>Blog Tittle: {{ blog.title }}</p>
            <p>Blog Content:</p>
            <p>{{ blog.content }}</p>
          </div>
          <button class="btn btn-sm bg-primary p-4 mb-3 mb-sm-2">Save</button>
        </div>
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
        previewImage: null,
        categories[],
      },
    };
  },
  methods: {
    uploadImage(e) {
      const image = e.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (e) => {
        this.previewImage = e.target.result;
        console.log(this.previewImage);
      };
    },
  },
};
</script>
<style scoped>
#row_style {
  margin-top: 30px;
}
#preview {
  border: 1px solid rgb(187, 187, 187);
}
.blogs {
  margin-top: 50px;
}
#submit {
  display: block;
  margin: auto;
}
</style>
