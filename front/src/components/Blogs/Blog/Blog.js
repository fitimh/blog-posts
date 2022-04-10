import axios from "axios";
    export default {
         data() {
          
            return {
                products: [],
            }
        },
        created() {
            let self = this;
      
            axios.get(self.$apiUrl + `/api/posts`)
                .then(response => {
                    this.products = response.data;
                    console.log(response.data)
                });
        },
        methods: {
          
      
            deleteProduct(id) { 
                let self = this;
                axios
                    .delete(self.$apiUrl + `/api/posts/${id}`)
                    .then(response => {
                        let i = this.products.map(data => data.id).indexOf(id);
                        this.products.splice(i, 1)
                        console.log(response)

                        return response;
                    });
            }
        }
    }
