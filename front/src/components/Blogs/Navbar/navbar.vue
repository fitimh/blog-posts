<template>
   <div class="content">
      <nav class="navbar justify-content-between">
         <a id="t-right" class="navbar-brand w-25 bg-primary p-2 text-white"
            >Blog Website
         </a>

         <div id="search-icon" class="justify-content-cente">
            <i id="ico" class="fas fa-search fa-rotate-90"></i>
         </div>

         <ul class="nav justify-content-end">
            <li class="nav-item">
               <div class="nav-link">
                  <router-link to="/nature">Nature</router-link>
               </div>

               <!-- <a class="nav-link" href="#">Nature</a> -->
            </li>
            <li class="nav-item">
               <router-link to="/nature">People</router-link>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Trips</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Animals</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Fashion</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Tech</a>
            </li>
         </ul>
      </nav>
   </div>
</template>
<script>
// export default {

// }
</script>
<style scoped>
.content {
   width: 90%;
   margin: 10px auto;
}
#t-right {
   text-align: end;
}
#search-icon {
   font-size: 20px;
   position: absolute;
   display: inline-flex;
   color: grey;
   left: 25%;
   top: 13%;

   height: 46px;
   overflow: hidden;
   background: #e0dfdf;
   padding: 15px;
}
</style>
