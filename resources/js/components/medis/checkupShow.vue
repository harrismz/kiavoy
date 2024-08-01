<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Data Ibu</h2>
                        <div class="separator"></div>
                        
                        {{ queryParam }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "checkupShow",
    data() {
        return {
            inputValue: ''
        };
    },
    computed: {
        formAction() {
            return '/admin/checkup/show'; // Ensure this matches the route path
        },
        
        queryParam() {
          return this.$route.query; // Access the query parameter
        }
    },
    mounted() {
        // Handle query parameters or perform actions when component is mounted
        console.log('Query Parameter:', this.queryParam);
    }

};
</script>

<style scoped>
/* Jika Anda memiliki styling khusus, tambahkan di sini */
</style>
