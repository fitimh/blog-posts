import Vue from 'vue'
import Vuex from 'vuex'
import actions from './resources/action'
import mutations from './resources/mutations'
import getters from './resources/getters'
import state from "./resources/state";

Vue.use(Vuex);

export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})