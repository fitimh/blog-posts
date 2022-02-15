<template>
   <div class="home">
      <navbar />


         {{ $route.params.name }}
   </div>
</template>

<script>
// @ is an alias to /src
import navbar from "@/components/Blogs/Navbar/navbar";

export default {
   name: "Home",
   components: {
      navbar,
   
   },
};
</script>
