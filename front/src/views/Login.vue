<template>
   <div class="login">
      <Login />
      {{ $route.params.name }}
   </div>
</template>

<script>
// @ is an alias to /src
// import login from "@/components/Login/Login";

import Login from "@/components/Login/login.vue";

export default {
   name: "login",
   components: {
      Login,
   },
};
</script>
