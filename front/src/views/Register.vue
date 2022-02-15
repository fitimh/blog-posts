<template>
   <div class="register">
      <register />
      {{ router.params.name }}
   </div>
</template>
<script>
import Register from "@/components/Login/register.vue";
export default {
   name: "register",
   components: {
      Register,
   },
};
</script>
