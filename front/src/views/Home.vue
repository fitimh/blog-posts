<template>
   <div class="home">
      <li class="nav-item">
         <div class="nav-link"></div>
      </li>

      <login />
      <navbar />
   </div>
</template>

<script>
// @ is an alias to /src
import navbar from "@/components/Blogs/Navbar/navbar";
// import Login from "@/components/Login/login";

export default {
   name: "Home",
   components: {
      navbar,
      // Login,
   },
};
</script>
