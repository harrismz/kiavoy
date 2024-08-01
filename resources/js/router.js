import { createRouter, createWebHistory } from 'vue-router';
import store from './store';
import Login from './components/Login.vue';
import Registration from './components/Register.vue';
import IdentitasIbu from './components/Ibu/IdentitasIbu.vue';
import IdentitasAyah from './components/Ayah/IdentitasAyah.vue';
import Profile from './components/Ibu/Profile.vue';
import HealthRecordIbu from './components/Ibu/HealthRecord.vue';
import QRCode from './components/utils/QRCode.vue';
import UserLayout from './layouts/UserLayout.vue';
import LoginLayout from './layouts/LoginLayout.vue';
import MenuMedis from './components/medis/menu.vue';

const resolveComponentBasedOnRole = () => {
    const userRole = store.state.user.role; // Assuming the user's role is stored in the Vuex store

    switch (userRole) {
        case 'ibu':
            return MenuMedis;
        case 'ayah':
            return IdentitasAyah;
        default:
            return IdentitasIbu;
    }
}

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
        name: 'identitas-ibu',
        component: IdentitasIbu,
        props: true,
        meta: {
            layout: 'LoginLayout'
        }
    },
    {
        path: '/identitas-ayah',
        name: 'identitas-ayah',
        component: IdentitasAyah,
        props: true,
        meta: {
            layout: 'LoginLayout'
        }
    },
    {
        path: '/admin',
        name: 'Profile',
        component: resolveComponentBasedOnRole,
        meta: {
            layout: 'UserLayout',
            requiresAuth: true
        }
    },
    {
        path: '/health-record-ibu',
        name: 'HealthRecordIbu',
        component: HealthRecordIbu,
        meta: {
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

// router.beforeEach((to, from, next) => {
//     // Periksa apakah rute memerlukan autentikasi
//     if (to.meta.requiresAuth) {
//         // Cek status autentikasi (misalnya, dari Vuex store)
//         const isAuthenticated = store.getters.isAuthenticated;  // Ganti sesuai dengan implementasi autentikasi Anda

//         if (!isAuthenticated) {
//             // Jika tidak autentikasi, arahkan ke halaman login
//             window.location.href = '/admin/login';
//         } else {
//             // Jika sudah autentikasi, lanjutkan ke rute yang diinginkan
//             next();
//         }
//     } else {
//         // Jika tidak memerlukan autentikasi, lanjutkan ke rute yang diinginkan
//         next();
//     }
// });

export default router;
