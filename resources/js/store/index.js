import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import router from '../router/routes'
import axios from 'axios';

Vue.use(Vuex, axios)


export const store = new Vuex.Store({
    state: {
        api: 'http://localhost:8000/api',
        // userIsLoggedIn: userIsLoggedIn,
        // authUser: authUser,
        // authUserService: authUserService,
        // adminIsLoggedIn: adminIsLoggedIn,
        // authAdmin: authAdmin,
        // redirectOnLogin: redirectOnLogin,
        PgScrollPosition: null,
    },
    getters: {
        pgScrollPosition(state){
            return state.PgScrollPosition
        },
    },
    actions: {},
    mutations: {
        checkPgScrollHeight(state){
            state.PgScrollPosition = window.scrollY
        },
    }
})
