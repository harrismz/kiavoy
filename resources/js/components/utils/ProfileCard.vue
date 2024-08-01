<template>
    <div class="card">
        <div class="card-body">
            <div class="bg-white p-4 shadow rounded mb-4">
                <h5 class="text-lg font-bold mb-2">{{ title }}</h5>
                <p class="mb-4">{{ description }}</p>
                <a :href="link" class="text-blue-500">Selengkapnya ></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        description: String,
        link: String
    }
};
</script>
