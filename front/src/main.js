import Vue from "vue";
import App from "./App.vue";

import "bootstrap/dist/css/bootstrap.min.css";

import "@/assets/general.css";
import {library} from "@fortawesome/fontawesome-svg-core";
import {faUserSecret} from "@fortawesome/free-solid-svg-icons";

// /* import font awesome icon component */
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

import router from './router'

// /* add icons to the library */
library.add(faUserSecret);

// /* add font awesome icon component */
Vue.component("font-awesome-icon", FontAwesomeIcon);

Vue.config.productionTip = false;

new Vue({
   router,
   render: (h) => h(App)
}).$mount("#app");
