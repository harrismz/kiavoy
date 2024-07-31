import { createStore } from 'vuex';
import axios from 'axios';

const store = createStore({
    state: {
        user: null, // Informasi pengguna yang login
        config: {
            baseUrl: '', // URL dasar yang mungkin diperlukan
            imgLogo: '',
        },
    },
    getters: {
        user: (state) => state.user,
        baseUrl: (state) => state.config.baseUrl,
        imgLogo: (state) => state.config.imgLogo,
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
        setBaseUrl(state, url) {
            state.config.baseUrl = url;
        },
        setLogo(state, imgLogo) {
            state.config.imgLogo = imgLogo;
        },
    },

    actions: {
        async fetchUser({ commit }) {
            try {
                const response = await axios.get('/user');
                commit('setUser', response.data.user);
            } catch (error) {
                console.error('Error fetching user :', error);
            }
        },
        async fetchBaseUrl({ commit }) {
            try {
                const response = await axios.get('/config');
                commit('setBaseUrl', response.data.baseUrl);
            } catch (error) {
                console.error('Error fetching baseUrl :', error);
            }
        },
        async fetchLogo({ commit }) {
            // commit('setLogo', './storage/app/public/images/buku_kia.png');
            try {
                const response = await axios.get('/config');
                commit('setLogo', response.data.baseUrl + '/storage/images/buku_kia.png');
            } catch (error) {
                console.error('Error fetching Logo :', error);
            }
        },

    }
});

export default store;
