<template>
   <div id="app">
      <navbar />
      <HelloWorld />
   </div>
</template>

<script>
import navbar from "./components/Blogs/navbar.vue";
import HelloWorld from "./components/Blogs/blog.vue";

export default {
   name: "App",
   components: {
      HelloWorld,
      navbar,
   },
};
</script>

<style>
/* #app {
   font-family: Avenir, Helvetica, Arial, sans-serif;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
   text-align: center;
   color: #2c3e50;
   margin-top: 60px;
} */
</style>
