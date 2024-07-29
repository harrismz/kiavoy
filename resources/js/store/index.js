import { createStore } from 'vuex';

const store = createStore({
    state() {
        return {
            user: {
                name: 'Diah Ayu Puspitasari',  // Data contoh
                profilePicture: 'https://via.placeholder.com/40'  // Ganti dengan URL gambar profil user
            }
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        }
    }
});

export default store;
