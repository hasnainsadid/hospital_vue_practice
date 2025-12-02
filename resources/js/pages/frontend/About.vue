<template>
    <FrontendLayout>
        <About />
        <FindDoctor />
        <Doctor />
    </FrontendLayout>
</template>

<script setup>
import About from '@/components/frontend/About.vue';
import Doctor from '@/components/frontend/Doctor.vue';
import FindDoctor from '@/components/frontend/FindDoctor.vue';
import FrontendLayout from '@/layouts/FrontendLayout.vue';

</script>

<style lang="scss" scoped>

</style>