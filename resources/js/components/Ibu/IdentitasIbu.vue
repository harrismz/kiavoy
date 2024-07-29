<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="flex w-full max-w-4xl shadow-md rounded-lg overflow-hidden">
            <div class="w-1/2 bg-gray-200 flex items-center justify-center">
                <div>
                    <!-- <img src="http://localhost:8000/storage/images/logo.png" alt="Logo" class="w-32 h-32 mb-4"> -->
                    <img :src="`${baseUrl}/storage/images/ibu dan anak.jpg`" alt="Image"
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
                                {{ bloodType.blood_type_name }}
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
                            @change="updateKecamatan" required>
                            <option value="" disabled>Pilih Kelurahan</option>
                            <option v-for="kelurahan in kelurahanList" :key="kelurahan.id" :value="kelurahan.id">
                                {{ kelurahan.kelurahan_name }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kecamatan" class="block text-sm font-medium text-gray-700">kecamatan</label>
                        <select v-model="form.kecamatan" id="kecamatan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" disabled>Pilih kecamatan</option>
                            <option v-for="kecamatan in kecamatanList" :key="kecamatan.id" :value="kecamatan.id">
                                {{ kecamatan.kecamatan_name }}
                            </option>
                        </select>
                    </div>
                    <!-- <div class="mb-4">
                        <label for="kabupaten" class="block text-sm font-medium text-gray-700">kabupaten</label>
                        <select v-model="form.kabupaten" id="kabupaten"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            @change="updateProvinsi" required>
                            <option value="" disabled>Pilih Kabupaten</option>
                            <option v-for="kabupaten in kabupatenList" :key="kabupaten.id" :value="kabupaten.id">
                                {{ kabupaten.kabupaten_name }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="province" class="block text-sm font-medium text-gray-700">provinsi</label>
                        <select v-model="form.province" id="province"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" disabled>Pilih province</option>
                            <option v-for="province in provinceList" :key="province.id" :value="province.id">
                                {{ province.province_name }}
                            </option>
                        </select>
                    </div> -->
                    <div class="mb-4">
                        <label for="pendidikan" class="block text-sm font-medium text-gray-700">Pendidikan</label>
                        <select v-model="form.pendidikan" id="pendidikan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" disabled>Pilih Pendidikan</option>
                            <option v-for="education in educationList" :key="education.id" :value="education.id">
                                {{ education.education_name }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                        <select v-model="form.pekerjaan" id="pekerjaan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" disabled>Pilih Pekerjaan</option>
                            <option v-for="job in jobList" :key="job.id" :value="job.id">
                                {{ job.job_name }}
                            </option>
                        </select>
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
import { reactive, ref, onMounted } from 'vue';

export default {
    setup() {
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
            // kabupaten: '',
            // provinsi: '',
            pendidikan: '',
            pekerjaan: ''
        });

        const bloodTypeList = ref([]);
        const kelurahanList = ref([]);
        const kecamatanList = ref([]);
        // const kabupatenList = ref([]);
        // const provinceList = ref([]);
        const educationList = ref([]);
        const jobList = ref([]);
        const baseUrl = document.querySelector('meta[name="base-url"]').getAttribute('content');


        const fetchKelurahan = async () => {
            try {
                const response = await axios.get(baseUrl + '/api/kelurahan');
                kelurahanList.value = response.data;
                console.log({ kelurahanList });
            } catch (error) {
                console.error('Error fetching kelurahan:', error);
            }
        }

        const fetchBloodTypes = async () => {
            try {
                const bloodTypeResponse = await axios.get(baseUrl + '/api/blood-types');
                bloodTypeList.value = bloodTypeResponse.data;
                console.log({ bloodTypeList });
            } catch (error) {
                console.error('Error fetching blood type:', error);
            }
        };

        const fetchEducations = async () => {
            try {
                const educationResponse = await axios.get(baseUrl + '/api/pendidikan');
                educationList.value = educationResponse.data;
                console.log({ educationList });
            } catch (error) {
                console.error('Error fetching education:', error);
            }
        };

        const fetchJobs = async () => {
            try {
                const jobResponse = await axios.get(baseUrl + '/api/pekerjaan');
                jobList.value = jobResponse.data;
                console.log({ jobList });
            } catch (error) {
                console.error('Error fetching job:', error);
            }
        };

        const updateKecamatan = async () => {
            try {
                const selectedKelurahan = await axios.get(baseUrl + '/api/kecamatan/' + form.kelurahan);
                kecamatanList.value = selectedKelurahan.data;
                console.log({ kecamatanList });
            } catch (error) {
                console.error('Error fetching kecamatan: ', error);
            }
        };
        // const updateKabupaten = async () => {
        //     try {
        //         const selectedKecamatan = await axios.get('http:localhost:8000/api/kabupaten/' + form.kecamatan);
        //         kabupatenList.value = selectedKecamatan.data;
        //         console.log({ kabupatenList });
        //     } catch (error) {
        //         console.error('Error fetching kabupaten: ', error);
        //     }
        // };
        // const updateProvinsi = async () => {
        //     try {
        //         const selectedKabupaten = await axios.get('http:localhost:8000/api/provinsi/' + form.kabupaten);
        //         provinceList.value = selectedKabupaten.data;
        //         console.log({ provinceList });
        //     } catch (error) {
        //         console.error('Error fetching provinsi: ', error);
        //     }
        // };

        const submitForm = async () => {
            try {
                const response = await axios.post(baseUrl + '/api/identitas-ibu', form);
                console.log(response.data);
                // Handle the next step or redirect
            } catch (error) {
                console.error(error);
                // Handle the error
            }
        };

        onMounted(() => {
            fetchKelurahan();
            fetchBloodTypes();
            fetchEducations();
            fetchJobs();
        });

        return {
            form,
            kelurahanList,
            bloodTypeList,
            updateKecamatan,
            kecamatanList,
            // updateKabupaten,
            // kabupatenList,
            // updateProvinsi,
            // provinceList,
            educationList,
            jobList,
            baseUrl,
            submitForm,
        };
    }
};
</script>

<style scoped>
/* Add your styles here */
</style>
