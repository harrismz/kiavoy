<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="flex w-full max-w-4xl shadow-md rounded-lg overflow-hidden">
            <div class="w-1/2 bg-gray-200 flex items-center justify-center">
                <div>
                    <!-- <img src="http://localhost:8000/storage/images/logo.png" alt="Logo" class="w-32 h-32 mb-4"> -->
                    <img src="http://localhost:8000/storage/images/ibu dan anak.jpg" alt="Image"
                        class="w-full h-full object-cover">
                </div>
            </div>
            <div class="w-1/2 p-8 bg-white">
                <h2 class="text-2xl font-bold mb-6 text-center">IDENTITAS IBU</h2>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label for="namaIbu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                        <input v-model="form.namaIbu" type="text" id="namaIbu"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-700">Nomor Induk
                            Kependudukan</label>
                        <input v-model="form.nik" type="text" id="nik"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="nkk" class="block text-sm font-medium text-gray-700">Nomor Jaminan Kesehatan
                            Nasional</label>
                        <input v-model="form.nkk" type="text" id="nkk"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="tempatLahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input v-model="form.tempatLahir" type="text" id="tempatLahir"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="tanggalLahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input v-model="form.tanggalLahir" type="date" id="tanggalLahir"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="tinggi" class="block text-sm font-medium text-gray-700">Tinggi</label>
                        <input v-model="form.tinggi" type="number" id="tinggi"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="golonganDarah" class="block text-sm font-medium text-gray-700">Golongan
                            Darah</label>
                        <select v-model="form.golonganDarah" id="golonganDarah"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" disabled>Pilih Golongan Darah</option>
                            <option v-for="bloodType in bloodTypeList" :key="bloodType.id"
                                :value="bloodType.blood_type_name">
                                {{ bloodType.type }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input v-model="form.alamat" type="text" id="alamat"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                        <select v-model="form.kelurahan" id="kelurahan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            @change="updateKecamatanProvinsi" required>
                            <option value="" disabled>Pilih Kelurahan</option>
                            <option v-for="kelurahan in kelurahanList" :key="kelurahan.id" :value="kelurahan.id">
                                {{ kelurahan.kelurahan_name }}
                            </option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                        <input type="text" id="kecamatan" v-model="form.kecamatan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            readonly />
                    </div>

                    <div class="mb-4">
                        <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                        <input type="text" id="provinsi" v-model="form.provinsi"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            readonly />
                    </div>
                    <div class="mb-4">
                        <label for="pendidikan" class="block text-sm font-medium text-gray-700">Pendidikan</label>
                        <input v-model="form.pendidikan" type="text" id="pendidikan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                        <input v-model="form.pekerjaan" type="text" id="pekerjaan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Lanjut
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { useRouter } from 'vue-router';
import { reactive, ref, onMounted } from 'vue';

export default {
    setup() {
        const router = useRouter();
        const form = reactive({
            namaIbu: '',
            nik: '',
            nkk: '',
            tempatLahir: '',
            tanggalLahir: '',
            tinggi: '',
            golonganDarah: '',
            alamat: '',
            kelurahan: '',
            kecamatan: '',
            pendidikan: '',
            pekerjaan: ''
        });

        const kelurahanList = ref([]);
        const bloodTypeList = ref([]);

        onMounted(async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/kelurahan');
                kelurahanList = response.data;
                console.log({ kelurahanList });
            } catch (error) {
                console.error('Error fetching kelurahan:', error);
            }
            try {
                const bloodTypeResponse = await axios.get('http://localhost:8000/api/blood-types');
                bloodTypeList = bloodTypeResponse.data;
                console.log({ bloodTypeList });
            } catch (error) {
                console.error('Error fetching blood type:', error);
            }
        });

        // const updateKecamatanProvinsi = () => {
        //     const selectedKelurahan = kelurahanList.value.find(kel => kel.id === form.kelurahan);
        //     if (selectedKelurahan) {
        //         form.kecamatan = selectedKelurahan.kecamatan.id;
        //         form.provinsi = selectedKecamatan.provinsi.id;
        //     }
        // };

        const submitForm = async () => {
            try {
                const response = await axios.post('http://localhost:8000/api/identitas-ibu', form);
                console.log(response.data);
                // Handle the next step or redirect
            } catch (error) {
                console.error(error);
                // Handle the error
            }
        };

        return {
            form,
            submitForm
        };
    }
};
</script>

<style scoped>
/* Add your styles here */
</style>
