<template>
   <div class="x">
      <navbar />
      <blogs />
   </div>
</template>

<script>
// @ is an alias to /src
import navbar from "@/components/Blogs/Navbar/navbar";
import blogs from "@/components/Blogs/Blog/Blog.vue";
// import Login from "@/components/Login/login";

export default {
   name: "Home",
   components: {
      navbar,
      blogs,

      // Login,
   },
};
</script>
