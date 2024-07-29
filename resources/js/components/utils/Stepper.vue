<template>
    <div class="flex justify-between mb-4">
        <div v-for="(step, index) in steps" :key="index"
            :class="['py-2 px-4 rounded cursor-pointer', { 'bg-blue-500 text-white': currentStep === index, 'bg-gray-200': currentStep !== index }]"
            @click="goToStep(index)">
            {{ step }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        steps: Array,
        currentStep: Number
    },
    methods: {
        goToStep(index) {
            this.$emit('update:currentStep', index);
        }
    }
};
</script>
