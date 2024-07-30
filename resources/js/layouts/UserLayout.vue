<template>
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">Logo</h1>
                <nav class="flex items-center">
                    <!-- <router-link to="/dashboard" class="mr-4">Dashboard</router-link> -->
                    <router-link to="/" class="mr-4">Profile</router-link>
                    <div class="relative" @click="toggleDropdown">
                        <img :src="user.profilePicture" alt="Profile Picture"
                            class="rounded-full w-10 h-10 cursor-pointer">
                        <ul v-if="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg">
                            <li class="block px-4 py-2 text-gray-800 hover:bg-gray-100 cursor-pointer" @click="logout">
                                Logout</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main class="flex-grow container mx-auto p-4">
            <slot></slot>
        </main>
        <footer class="bg-gray-800 text-white p-4">
            <div class="container mx-auto text-center">
                &copy; 2024 Your Company
            </div>
        </footer>
    </div>
</template>

<script>
import { mapState } from 'vuex';
import axios from 'axios';

export default {
    name: 'UserLayout',
    data() {
        return {
            dropdownOpen: false
        };
    },
    computed: {
        ...mapState(['user'])
    },
    methods: {
        toggleDropdown() {
            this.dropdownOpen = !this.dropdownOpen;
        },
        // logout() {
        //     // Tambahkan logika logout di sini, misalnya dengan memanggil API logout
        //     axios.post(window.routeUrl.logout);
        //     console.log('Logout');
        // }
        logout() {
            try {
                // Kirim request POST ke endpoint logout
                axios.post('/admin/logout', {}, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                // Redirect atau update status setelah logout
                window.location.href = '/admin/login'; // Ganti dengan URL login jika diperlukan
            } catch (error) {
                console.error('Logout error:', error);
            }
        }
    }
}
</script>

<style scoped>
/* Tambahkan styling khusus jika diperlukan */
</style>
