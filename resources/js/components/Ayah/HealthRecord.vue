<template>
    <div class="p-8 bg-gray-100 font-sans">
        <div class="flex items-center mb-8">
            <img src="@/assets/logo.png" alt="Logo" class="w-16 h-16 mr-4">
            <h1 class="text-2xl font-bold">Catatan Kesehatan Ibu</h1>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>Tidak beresiko preeklampsia.</li>
                <li>Konjungtiva normal, sklera normal, leher normal, gigi dan mulut normal, THT normal, jantung normal,
                    paru-paru normal, perut normal, tungkai normal.</li>
                <li>USG Trimester I : GS x cm, CRL x cm, DJJ x dpm, sesuai usia kehamilan x minggu, letak kantong
                    kehamilan intrauterin, taksiran persalinan and dd mm yyyy</li>
                <li>Hasil USG :</li>
            </ul>
            <div class="flex justify-center mb-4">
                <img src="@/assets/ultrasound.png" alt="Hasil USG" class="rounded shadow-md">
            </div>
            <ul class="list-disc list-inside space-y-2">
                <li>Pemeriksaan Laboratorium : Hemoglobin x gr/dL, golongan darah & Rhesus O, gula darah sewaktu mg/dL,
                    H R, S R, Hepatitis B R.</li>
                <li>Keluhan dan gejala lainnya : -</li>
                <li>Solusi Keluhan : -</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "HealthRecord"
};
</script>

<style scoped>
/* Jika Anda memiliki styling khusus, tambahkan di sini */
</style>
