import axios from 'axios'
let actions = {
    createPost({commit}, post) {
        axios.post(this.proecss.env.VUE_APP_BACKEND_URL + '/add', post)
            .then(res => {
                commit('CREATE_POST', res.data)
            }).catch(err => {
            console.log(err)
        })
      
    },
    // fetchPosts({commit}) {
    //     axios.get(this.$apiUrl + '/posts')
    //         .then(res => {
    //             commit('FETCH_POSTS', res.data)
    //         }).catch(err => {
    //         console.log(err)
    //     })
    // },
    // deletePost({commit}, post) { // qa jan kto sene ktu bbe bir prit 
    //     axios.delete(this.$apiUrl + '/posts' + post.id)
    //         .then(res => {
    //             if (res.data === 'ok')
    //                 commit('DELETE_POST', post)
    //         }).catch(err => {
    //         console.log(err)
    //     })
    // }
}

export default actions