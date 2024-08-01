<template>
    <!-- <component :is="layout">
    </component> -->
    <router-view></router-view>
</template>

<script>
import { computed } from 'vue';
import { useRoute } from 'vue-router';
import LoginLayout from './layouts/LoginLayout.vue';
import UserLayout from './layouts/UserLayout.vue';

export default {
    components: {
        LoginLayout,
        UserLayout
    },
    setup() {
        const route = useRoute();
        const layout = computed(() => {
            return route.meta.layout === 'UserLayout' ? UserLayout : LoginLayout;
        });

        return {
            layout
        };
    }
}
</script>
