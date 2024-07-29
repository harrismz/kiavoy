import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/Login.vue';
import Registration from './components/Register.vue';
import IdentitasIbu from './components/IdentitasIbu.vue';

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
    { path: '/identitas-ibu', component: IdentitasIbu }
    // Anda bisa menambahkan rute lain di sini
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
