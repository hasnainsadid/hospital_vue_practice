<template>

    <Head>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
            rel="stylesheet">

        <!-- Icon Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries -->
        <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="frontend/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template CSS -->
        <link href="frontend/css/style.css" rel="stylesheet">
    </Head>

    <!-- Layout Wrapper -->
    <Header />

    <main>
        <slot />
    </main>

    <Footer />

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import { onMounted } from 'vue'
import Header from '@/components/frontend/layouts/Header.vue'
import Footer from '@/components/frontend/layouts/Footer.vue'

// onMounted(() => {
//     const scripts = [
//         "https://code.jquery.com/jquery-3.4.1.min.js",
//         "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js",
//         "frontend/lib/easing/easing.min.js",
//         "frontend/lib/waypoints/waypoints.min.js",
//         "frontend/lib/owlcarousel/owl.carousel.min.js",
//         "frontend/lib/tempusdominus/js/moment.min.js",
//         "frontend/lib/tempusdominus/js/moment-timezone.min.js",
//         "frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js",
//         "frontend/js/main.js"
//     ];
//     scripts.forEach(src => {
//         const script = document.createElement('script')
//         script.src = src
//         script.defer = true
//         document.body.appendChild(script)
//     })
// })

// Load JS files
const loadScript = (src) => {
    return new Promise((resolve) => {
        const s = document.createElement('script')
        s.src = src
        s.async = false
        s.onload = resolve
        document.body.appendChild(s)
    })
}

onMounted(async () => {
    await loadScript("frontend/lib/easing/easing.min.js")
    await loadScript("frontend/lib/waypoints/waypoints.min.js")
    await loadScript("frontend/lib/owlcarousel/owl.carousel.min.js")
    await loadScript("frontend/lib/tempusdominus/js/moment.min.js")
    await loadScript("frontend/lib/tempusdominus/js/moment-timezone.min.js")
    await loadScript("frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")
    await loadScript("frontend/js/main.js")
})
</script>