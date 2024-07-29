import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/Login.vue';
import Registration from './components/Register.vue';
import IdentitasIbu from './components/Ibu/IdentitasIbu.vue';
import Profile from './components/Ibu/Profile.vue';
import HealthRecordIbu from './components/Ibu/HealthRecord.vue';
import QRCode from './components/utils/QRCode.vue';
import UserLayout from './layouts/UserLayout.vue';

const routes = [
    {
        path: '/registration',
        name: 'registration',
        component: Registration,
        meta: {
            layout: 'LoginLayout'
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            layout: 'LoginLayout'
        }
    },
    {
        path: '/qr-code',
        name: 'QRCode',
        component: QRCode,
        meta: {
            layout: 'LoginLayout'
        }
    },

    // IBU
    {
        path: '/identitas-ibu',
        component: IdentitasIbu,
        meta: {
            layout: 'LoginLayout'
        }
    },
    {
        path: '/',
        name: 'Profile',
        component: Profile, meta: {
            layout: 'UserLayout',
            requiresAuth: true
        }
    },
    {
        path: '/health-record-ibu',
        name: 'HealthRecordIbu',
        component: HealthRecordIbu, meta: {
            layout: 'UserLayout',
            requiresAuth: true
        }
    },

    // AYAH
    // ANAK
    // Anda bisa menambahkan rute lain di sini
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
