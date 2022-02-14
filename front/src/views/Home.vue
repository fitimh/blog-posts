<template>
   <div class="home">
      <li class="nav-item">
         <div class="nav-link">
            <router-link to="/LOGIN"> login{{ login }}</router-link>
         </div>
      </li>

      <login />
      <navbar />
   </div>
</template>

<script>
// @ is an alias to /src
import navbar from "@/components/Blogs/Navbar/navbar.vue";
import Login from "@/components/Login/Login.vue";

export default {
   name: "Home",
   components: {
      navbar,
      Login,
   },
};
</script>
