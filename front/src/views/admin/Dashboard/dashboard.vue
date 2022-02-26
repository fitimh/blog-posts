<template>
   <div class="dashboard">
    <adminDashboard/>   
   </div>
</template>

<script>
// @ is an alias to /src
import adminDashboard from "@/components/Admin/Dashboard/dashboard.vue";

export default {
   name: "dashboard",
   components: {
      adminDashboard,
   },
};
</script>
