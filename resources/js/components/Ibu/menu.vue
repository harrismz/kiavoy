<template>
    <div class="container my-4">
        <!-- Logo and User Info -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
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
                        <div class="d-flex">
                            <button class="btn btn-primary mr-2" v-for="(week, index) in weeks" :key="index">
                                {{ week }}
                            </button>
                            <button class="btn btn-secondary">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stepper -->
        <div class="row mb-4">
            <div class="col-md-12">
                <ul class="stepper">
                    <li v-for="(step, index) in trimesters" :key="index" :class="{ active: currentStep >= index }">
                        <span class="stepper-number">{{ index + 1 }}</span>
                        <span class="stepper-label">{{ step }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="row mt-4">
            <div class="col-md-4" v-for="(card, index) in trimesterCards" :key="index">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">{{ card.title }}</h5>
                            <i :class="card.iconClass"></i>
                        </div>
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

const weeks = ref([
    'Minggu ke-1', 'Minggu ke-2', 'Minggu ke-3', 'Minggu ke-4', 'Minggu ke-5', 'Minggu ke-6', 'Minggu ke-7', 'Minggu ke-8', 'Minggu ke-9', 'Minggu ke-10'
]);

const trimesters = ref([
    'Trimester 1', 'Trimester 2', 'Trimester 3'
]);

const currentStep = ref(0); // Step yang sedang aktif

const trimesterCards = ref([
    { title: 'Info Janin Secara Umum', description: 'Tinggi : xxx cm, Berat : xxx cm, Ukuran : xxx', iconClass: 'fas fa-baby' },
    { title: 'Diary Ibu', description: 'Pencatatan mingguan, perawatan sehari-hari...', iconClass: 'fas fa-book' },
    { title: 'Catatan Kesehatan Ibu', description: 'Hasil skrining...', iconClass: 'fas fa-notes-medical' },
    { title: 'Grafik Evaluasi Kehamilan', description: 'Grafik peningkatan berat badan...', iconClass: 'fas fa-chart-line' },
    { title: 'Information', description: 'Informasi seputar kehamilan...', iconClass: 'fas fa-info-circle' },
    { title: 'Riwayat Persalinan', description: 'Informasi seputar persalinan...', iconClass: 'fas fa-baby-carriage' }
]);


</script>

<style scoped>
/* Gaya untuk stepper */
.stepper {
    display: flex;
    justify-content: space-between;
    list-style: none;
    padding: 0;
    margin: 0;
}

.stepper li {
    text-align: center;
    position: relative;
    flex: 1;
}

.stepper-number {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    background-color: #ddd;
    color: #fff;
    margin-bottom: 5px;
}

.stepper-label {
    display: block;
    color: #999;
}

.stepper li.active .stepper-number {
    background-color: #007bff;
}

.stepper li.active .stepper-label {
    color: #007bff;
}

.stepper li:before {
    content: '';
    position: absolute;
    top: 14px;
    left: 50%;
    width: 100%;
    height: 2px;
    background-color: #ddd;
    z-index: -1;
}

.stepper li:first-child:before {
    display: none;
}

.stepper li.active:before {
    background-color: #007bff;
}
</style>
