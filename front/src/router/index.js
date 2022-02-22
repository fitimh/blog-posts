import Vue from "vue";
import VueRouter from "vue-router";
import Home from "@/views/Home";
import About from "@/views/About";
import Categories from "@/views/Categories";
import login from "@/views/Login";
import register from "@/views/Register";
import addblog from "@/views/admin/Blog/add"

Vue.use(VueRouter);

const routes = [
   {path: "/", name: "Home", component: Home},
   {path: "/about", name: "About", component: About},
   {path: "/categories/:name", name: "Categories", component: Categories},
   {path: "/login", name: "login", component: login},
   {path: "/register", name: "register", component: register},
   {path: "/admin/addBlog",name:"addblog", component:addblog}
];

const router = new VueRouter({
   mode: "history",
   base: process.env.BASE_URL,
   routes,
});

export default router;
