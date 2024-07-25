import './bootstrap';

import { createApp } from 'vue'
import App from './components/App.vue'
import { createVuetify } from 'vuetify';
import 'vuetify/styles';
import { aliases, mdi } from 'vuetify/iconsets/mdi';

const vuetify = createVuetify({
    icons: {
        defaultSet: 'mdi',
        aliases,
        sets: {
            mdi,
        },
    },
});

createApp(App).use(vuetify).mount("#app")
