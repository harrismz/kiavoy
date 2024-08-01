<template>
    <div class="container">
        <!-- <div class="row mt-5">
            <div class="col-12 text-center">
                <img src="#" alt="Logo" class="img-fluid" style="max-width: 150px;">
            </div>
        </div> -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">dr. Miftahul Hidayati</h5>
                        <p class="card-text">NIP: xxxxxxxxxxxxxxxxxx</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon">
                            <img src="/public/storage/images/checkup.png" alt="Check Up Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title mt-3">Check Up</h5>
                        <p class="card-text">Menu check up sebagai catatan kesehatan ibu serta pertumbuhan anak yang diintegrasikan menggunakan QR code.</p>
                        <!-- <a href="#" class="btn btn-primary">Selengkapnya &gt;</a> -->
                        <router-link class="btn btn-primary" to="/admin/checkup">Selengkapnya &gt;</router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon">
                            <img src="/public/storage/images/history.png" alt="History Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title mt-3">History</h5>
                        <p class="card-text">History seluruh check up yang telah dilakukan baik pada ibu hamil maupun anak.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya &gt;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon">
                            <img src="/public/storage/images/information.png" alt="Information Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title mt-3">Information</h5>
                        <p class="card-text">Informasi seputar perawatan dan pemenuhan gizi anak, serta informasi relevan lainnya dapat dibaca pada menu ini.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya &gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "HealthRecord",

};
</script>

<style scoped>
/* Jika Anda memiliki styling khusus, tambahkan di sini */
</style>
