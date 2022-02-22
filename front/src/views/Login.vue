<template>
   <div class="login">
      {{ $route.params.name }}
      <Login />
   </div>
</template>

<script>
// @ is an alias to /src

import Login from "@/components/Login/login.vue";

export default {
   name: "login",
   components: {
      Login,
   },
};
</script>
