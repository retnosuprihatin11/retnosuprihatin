<!-- CONTACT -->
<section id="contact"
    class="relative overflow-hidden bg-white flex items-center"
    style="min-height: 100vh; padding-top: 140px; padding-bottom: 24px; box-sizing: border-box;">
    <!-- ^ padding-top 140px = jarak aman dari navbar fixed, sama seperti section Home.
         Sesuaikan angka ini kalau navbar berbeda tinggi. -->

    <!-- Background Blur -->
    <div class="absolute -top-32 -left-24 w-80 h-80 bg-emerald-200/30 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -right-24 w-80 h-80 bg-yellow-200/30 rounded-full blur-3xl"></div>

    <div class="relative max-w-5xl mx-auto px-6 text-center w-full">

        <!-- Subtitle -->
        <p class="text-emerald-600 text-xs sm:text-sm font-semibold tracking-[6px] uppercase">
            Contact
        </p>

        <!-- Title -->
        <h2 class="mt-3 text-3xl md:text-5xl font-extrabold leading-[1.25] text-slate-900">
            Let's Build
<span class="block pt-2 pb-2 bg-gradient-to-r from-emerald-500 via-yellow-400 to-emerald-500 bg-clip-text text-transparent">                Something Amazing.
            </span>
            <span>
                </span>

        </h2>

        <!-- Description -->
        <p class="max-w-2xl mx-auto mt-4 text-gray-500 text-sm md:text-base leading-7">
            I'm always open to new opportunities, collaborations,
            freelance projects, or simply having a conversation about technology
            and design.
        </p>

        <!-- Button -->
        <div class="mt-6">

            <!-- GANTI NOMOR DI BAWAH INI dengan nomor WA aslimu.
                 Format: kode negara + nomor, TANPA tanda + atau 0 di depan.
                 Contoh nomor Indonesia 0812-3456-7890 -> ditulis 6281234567890 -->
            <a href="https://wa.me/message/7DX4JYEERP4NN1"
                target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-emerald-500 to-yellow-400 px-7 py-3 text-white text-sm font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

                <i class="fab fa-whatsapp text-lg"></i>

                Chat via WhatsApp

            </a>

        </div>

       

        <!-- Divider -->
        <div class="mt-8 w-full h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>

        <!-- Footer -->
        <div class="mt-5 flex flex-col md:flex-row justify-between items-center gap-3">

            <div class="text-center md:text-left">

                <h3 class="text-lg font-bold text-slate-900">
                    Retno <span class="text-yellow-500">Suprihatin</span>
                </h3>

                <p class="text-xs text-gray-500 mt-0.5">
                    
                </p>

            </div>

            <div class="flex gap-6 text-xs sm:text-sm">

                <a href="#home"
                    class="text-gray-500 hover:text-emerald-600 transition">
                    Home
                </a>

                <a href="#about"
                    class="text-gray-500 hover:text-emerald-600 transition">
                    About
                </a>

                <a href="#projects"
                    class="text-gray-500 hover:text-emerald-600 transition">
                    Projects
                </a>

                <a href="#contact"
                    class="text-gray-500 hover:text-yellow-500 transition">
                    Contact
                </a>

            </div>

        </div>

        <p class="mt-5 text-xs text-gray-400">
            © {{ date('Y') }} Retno Suprihatin. All Rights Reserved.
        </p>

    </div>

</section>

<style>
@media(max-width:768px){
    #contact{ min-height:auto !important; padding-top:130px; padding-bottom:60px; }
}
</style>