<template>
   <div class="posts">
      <create-post />
   </div>
</template>

<script>
// @ is an alias to /src
import createPost from "@/components/Posts/CreatePost";

export default {
   name: "posts",
   components: {
      createPost
   },
};
</script>
