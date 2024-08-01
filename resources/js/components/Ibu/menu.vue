<template>
    <div class="container my-4">
        <div class="row mb-4">
            <div class="col-md-3">
                <img :src="logoUrl" alt="Logo" class="img-fluid mb-3">
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ currentUser.name }} <br>
                                {{ currentUser.hpl }} | {{ currentUser.dob }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">{{ currentUser.name }}</a>
                                <a class="dropdown-item" href="#">Tambah Identitas Anak</a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary mr-2">Minggu ke-5</button>
                            <button class="btn btn-primary mr-2">Minggu ke-6</button>
                            <button class="btn btn-primary">Minggu ke-7</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4" v-for="(card, index) in trimesterCards" :key="index">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ card.title }}</h5>
                        <p class="card-text">{{ card.description }}</p>
                        <a href="#" class="btn btn-outline-primary">Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

// Data sementara
const logoUrl = '/path/to/logo.png';
const currentUser = ref({
    name: 'Diah Ayu Puspitasari',
    hpl: '10 Aug 2024',
    dob: '01 Jan 1990'
});

const trimesterCards = ref([
    { title: 'Info Janin Secara Umum', description: 'Tinggi : xxx cm, Berat : xxx cm, Ukuran : xxx' },
    { title: 'Diary Ibu', description: 'Pencatatan mingguan, perawatan sehari-hari...' },
    { title: 'Catatan Kesehatan Ibu', description: 'Hasil skrining...' },
    { title: 'Grafik Evaluasi Kehamilan', description: 'Grafik peningkatan berat badan...' },
    { title: 'Information', description: 'Informasi seputar kehamilan...' },
    { title: 'Riwayat Persalinan', description: 'Informasi seputar persalinan...' }
]);
</script>

<style scoped>
/* Gaya tambahan jika diperlukan */
</style>
