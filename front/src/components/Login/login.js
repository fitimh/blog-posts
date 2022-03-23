import "bootstrap/dist/css/bootstrap.min.css";
import axios from "axios";
import Swal from "sweetalert2";
export default {
  components: {},
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    //user login function and api call

    login_user() {
      let self = this;
      axios
        .post(self.$apiUrl + "/api/auth/login", this.form)
        .then((resp) => {
          console.log(resp["data"]["status"]);
          //this.loadlist();
          //reset form
          this.form.email = "";
          this.form.password = "";
          if (resp["data"]["status"] == "error") {
            Swal.fire({
              title: "OPPS",
              text: "error",
              icon: "warning",
            });
          } else {
            Swal.fire({
              title: "Hurry",
              text: "You have been logged-in successfully",
              icon: "success",
            });
          }
        })
        .catch((e) => {
          console.log(e);
          Swal.fire({
            title: "Hurry",
            text: e,
            icon: "warning",
          });
        });
    },
  },
};
