//importing modules
import "bootstrap/dist/css/bootstrap.min.css";
import Vue from "vue";
import axios from "axios";
import Swal from "sweetalert2";
Vue.prototype.$axios = axios;
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
    };
  },

  methods: {
    //user register function and api call
    create_user() {
      let self = this;

      axios
        .post(self.$apiUrl + "/api/auth/register", this.form)
        .then((response) => {
          //reset form after submission
          this.form.name = "";
          this.form.email = "";
          this.form.password = "";
          this.form.password_confirmation = "";
          //success message alert
          Swal.fire({
            title: "Success!",
            text: "User has been registered successfully",
            icon: "success",
          });
          return response;
        })
        .catch((e) => {
          let text =
            e.response.data.errors.name || e.response.data.errors.email ||
            e.response.data.errors.password;
            console.log(e.response);
          Swal.fire({ title: "Error", text: text, icon: "warning" });
        });
    },
  },
};
