import { createStore } from 'vuex'
import axios from 'axios'
import '@/plugins/axios.js'

export default createStore({
  state: {
    user: {}
  },
  getters: {},
  mutations: {
    storeUser (state, data) {
      state.user = data
      console.log("Mutations")
    }
  },
  actions: {
    storeUser (context, data) {
      const userNew = data
      axios
        .post('store', userNew)
        .then(response => {
          console.log("Actions",response.data)
          context.commit('storeUser', response.data)
        })
        .catch(function (e) {
          console.log('Erro', e)
        })
    }
  },
  modules: {}
})
