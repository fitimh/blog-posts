import Vue from "vue";
import App from "./App.vue";
import VueResource from "vue-resource";

import "bootstrap/dist/css/bootstrap.min.css";

import "@/assets/general.css";
import { library } from "@fortawesome/fontawesome-svg-core";
import { faUserSecret } from "@fortawesome/free-solid-svg-icons";

// /* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import router from "./router";
import store from "./store/index";

// variabel globale kjo munesh mju qas tana ant qishut this.$apiUrl

window.Vue = require("vue");  


// Vue.component("/posts", require("@/components/Posts.vue"));
// Vue.component("/createPost", require("@/components/CreatePost.vue"));

// kto jan komponenta routeri munesh me shtu routa
//qe u tutsha a pe baj kit gaf po qe e bana hahahaha

// /* add icons to the library */
library.add(faUserSecret);

Vue.use(VueResource);
// /* add font awesome icon component */
Vue.component("font-awesome-icon", FontAwesomeIcon);

Vue.config.productionTip = false;
Vue.prototype.$apiUrl = process.env.VUE_APP_BACKEND_URL;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
