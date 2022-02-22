<template>
   <div class="addblog">
      <navbar />
      <addblog />
   </div>
</template>

<script>
// @ is an alias to /src
import navbar from "@/components/Blogs/Navbar/navbar";
import Addblog from '@/components/Blogs/Blog/AddBlogs/addblog.vue';
// import Login from "@/components/Login/login";

export default {
   name: "Home",
   components: {
      navbar,
      Addblog,

      // Login,
   },
};
</script>
