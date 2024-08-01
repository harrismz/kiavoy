<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form" action="#">
                            <div class="form-group  mx-sm-3 mb-2 flex-grow-1">
                                <label for="id">Check up</label>
                                <input type="text" placeholder="input medical id : ID XXXXXX XXXX XXXXX " name="id" id="id" class="form-control">
                            </div>

                            <button class="btn btn-primary  mb-2 ml-auto">Submit</button>
                        </form>
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
