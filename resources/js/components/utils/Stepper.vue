<template>
    <div class="flex justify-between mb-4">
        <div v-for="(step, index) in steps" :key="index"
            :class="['py-2 px-4 rounded cursor-pointer', { 'bg-blue-500 text-white': currentStep === index, 'bg-gray-200': currentStep !== index }]"
            @click="goToStep(index)">
            Minggu Ke - {{ step }}
        </div>
    </div>
    <!-- <div class="p-4">
        <div class="flex items-center">
            <button @click="prevStep" :disabled="currentStep === 0" class="p-2 bg-gray-300 rounded-l">Prev</button>
            <div class="flex overflow-hidden w-full relative">
                <div class="flex transition-transform duration-300"
                    :style="{ transform: `translateX(-${currentStep * 100}%)` }">
                    <div v-for="(step, index) in steps" :key="index" class="flex-none w-full p-4">
                        <slot :step="step"></slot>
                    </div>
                </div>
            </div>
            <button @click="nextStep" :disabled="currentStep === steps.length - 1"
                class="p-2 bg-gray-300 rounded-r">Next</button>
        </div>
        <div class="flex justify-center mt-4">
            <div v-for="(step, index) in steps" :key="index" @click="currentStep = index"
                class="w-4 h-4 rounded-full mx-1 cursor-pointer"
                :class="index === currentStep ? 'bg-blue-500' : 'bg-gray-300'"></div>
        </div>
    </div> -->
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
        },
        nextStep() {
            if (this.currentStep < this.steps.length - 1) {
                this.currentStep += 1;
            }
        },
        prevStep() {
            if (this.currentStep > 0) {
                this.currentStep -= 1;
            }
        }
    }
};
</script>
