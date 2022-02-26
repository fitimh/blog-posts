<template>
  <div class="login">
    {{ $route.params.name }}
    <Login />
  </div>
</template>

<script>

import Login from "@/components/Login/Login.vue";

export default {
  name: "login",
  components: {
    Login,
  },
};
</script>
