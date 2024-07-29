import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
// import axios from 'axios';
// import { createVuetify } from 'vuetify';
// import 'vuetify/styles';
// import { aliases, mdi } from 'vuetify/iconsets/mdi';

import './bootstrap';
import 'tailwindcss/tailwind.css';

// const vuetify = createVuetify({
//     icons: {
//         defaultSet: 'mdi',
//         aliases,
//         sets: {
//             mdi,
//         },
//     },
// });

// createApp(App).use(router).use(vuetify).mount('#app');


// axios.defaults.baseURL = 'http://localhost:8000';
// axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// const token = document.head.querySelector('meta[name="csrf-token"]');

// if (token) {
//     axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.error('CSRF token not found');
// }

createApp(App).use(router).mount('#app');
