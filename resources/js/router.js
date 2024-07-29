import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/Login.vue';
import Registration from './components/Register.vue';
import IdentitasIbu from './components/Ibu/IdentitasIbu.vue';
import Profile from './components/Ibu/Profile.vue';
import HealthRecordIbu from './components/Ibu/HealthRecord.vue';

const routes = [
    {
        path: '/registration',
        name: 'registration',
        component: Registration,
    },
    {
        path: '/',
        name: 'login',
        component: Login,
    },

    // IBU
    { path: '/identitas-ibu', component: IdentitasIbu },
    {
        path: '/profile',
        name: 'Profile',
        component: Profile
    },
    {
        path: '/health-record-ibu',
        name: 'HealthRecordIbu',
        component: HealthRecordIbu
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
