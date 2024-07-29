<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="flex w-full max-w-4xl shadow-md rounded-lg overflow-hidden">
            <div class="w-1/2 bg-gray-200 flex items-center justify-center">
                <div>
                    <!-- <img src="http://localhost:8000/storage/users/July2024/5EBVXVtkaXZtpxHTUFxL.png" alt="Logo"
                        class="w-32 h-32 mb-4"> -->
                    <img src="http://localhost:8000/storage/settings/July2024/v1SNW071gmIWJmDqqIdh.png" alt="Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div class="w-1/2 p-8 bg-white">
                <h2 class="text-2xl font-bold mb-6 text-center">DAFTAR AKUN</h2>
                <p class="mb-6 text-center">Buat akun untuk dapat mengakses semua fitur KIA</p>
                <form @submit.prevent="register">
                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <input v-model="form.nik" type="number" id="nik"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input v-model="form.name" type="text" id="name"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input v-model="form.email" type="email" id="email"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input v-model="form.password" type="password" id="password"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Daftar Akun
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default {
    setup() {
        const router = useRouter();
        const baseUrl = document.querySelector('meta[name="base-url"]').getAttribute('content');
        const form = reactive({
            nik: '',
            name: '',
            email: '',
            password: ''
        });

        const register = async () => {
            try {
                const response = await axios.post(baseUrl + '/api/register', form);
                console.log("creating", response.data);
                router.push('/identitas-ibu');
            } catch (error) {
                console.error(error);
                // Tangani error jika terjadi
            }
        };

        return {
            form,
            register
        };
    }
};
</script>

<style scoped>
/* Add your styles here */
</style>
