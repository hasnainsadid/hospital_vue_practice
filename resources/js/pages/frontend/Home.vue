<template>
    <FrontendLayout>
        <Hero />
        <About />
        <Service />
        <Appointment />
        <Pricing />
        <Doctor />
        <FindDoctor />
        <Testimonial />
        <Blog />
    </FrontendLayout>
</template>

<script setup>
import About from '@/components/frontend/About.vue';
import Appointment from '@/components/frontend/Appointment.vue';
import Blog from '@/components/frontend/Blog.vue';
import Doctor from '@/components/frontend/Doctor.vue';
import FindDoctor from '@/components/frontend/FindDoctor.vue';
import Hero from '@/components/frontend/Hero.vue';
import Pricing from '@/components/frontend/Pricing.vue';
import Service from '@/components/frontend/Service.vue';
import Testimonial from '@/components/frontend/Testimonial.vue';
import FrontendLayout from '@/layouts/FrontendLayout.vue';
</script>

<style scoped>

</style>