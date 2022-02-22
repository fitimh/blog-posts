<template>
   <div class="content">
      <nav class="navbar justify-content-between">
         <router-link
            id="t-right"
            class="navbar-brand w-25 bg-primary p-2 text-white"
            :to="{name: 'Home', params: {name: 'Home'}}"
            >Blog Website</router-link
         >

         <div id="search-icon" class="justify-content-cente">
            <i id="ico" class="fas fa-search fa-rotate-90"></i>
         </div>

         <ul class="nav justify-content-end">
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'nature'}}"
                  >Nature</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'people'}}"
                  >People</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'trips'}}"
                  >Trips</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'animals'}}"
                  >Animals</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'fashion'}}"
                  >Fashion</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'Categories', params: {name: 'tech'}}"
                  >Tech</router-link
               >
            </li>
            <li class="nav-item">
               <router-link
                  class="nav-link"
                  :to="{name: 'login', params: {name: 'login'}}"
                  >Login</router-link
               >
            </li>

            <li class="nav-item">
               <router-link
                  class="nav-link btn-primary text-white"
                  :to="{name: 'register', params: {name: 'register'}}"
                  >Register</router-link
               >
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
   width: 100%;
   background: #080612;
}
.navbar {
   width: 90%;
   /* margin: 0 auto;
   height: 10vh; */
}
#t-right {
   text-align: end;
   justify-content: center;
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
