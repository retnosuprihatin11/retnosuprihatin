<!-- HERO -->
<section id="home"
    class="relative overflow-hidden bg-[#F8F9FC] flex items-center"
    style="min-height: 100vh; padding-top: 140px; padding-bottom: 24px; box-sizing: border-box;">
    <!-- ^ padding-top 140px = jarak aman supaya konten tidak ketutup navbar yang fixed/floating.
         Kalau navbarmu lebih tinggi/pendek dari perkiraan, tinggal naik/turunkan angka 140px ini
         (contoh: kalau masih sedikit ketutup, coba 160px; kalau jaraknya kejauhan, coba 110-120px). -->

    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">

        <div class="absolute -top-52 -left-52 w-[500px] h-[500px] bg-emerald-100 rounded-full blur-3xl opacity-50 animate-pulse-slow"></div>

        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-yellow-100 rounded-full blur-3xl opacity-50 animate-pulse-slow"
            style="animation-delay:1.5s;"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 w-full">

        <div class="grid lg:grid-cols-2 gap-8 items-center">

            <!-- LEFT -->
            <div class="animate-fade-in-up">

                <!-- Small Badge -->
                <div
                    class="inline-flex items-center gap-2 bg-white px-4 py-1.5 rounded-full shadow border border-gray-100">

                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-blink"></span>

                    <span class="text-xs sm:text-sm font-medium text-gray-700">
                        Available for Opportunities
                    </span>

                </div>

                <!-- Heading -->
                <h1 class="mt-4 text-2xl sm:text-3xl lg:text-4xl font-black leading-tight text-slate-900">

                    Hi, I'm

                    <span class="text-emerald-600">
                        Retno Suprihatin
                    </span>

                    <br>

                    <span class="text-yellow-500">
                        IT Graduate
                    </span>

                

                </h1>

                <!-- Description -->
                <p class="mt-4 text-gray-500 text-sm lg:text-base leading-7 max-w-xl">

                   Passionate about delivering excellent customer experiences and
    supporting business growth through technology, effective
    communication, and digital solutions. Experienced in customer
    service, digital marketing, SEO, web development, and learning &
    development, with strong communication, teamwork, adaptability,
    and problem-solving skills.
                </p>

                <!-- Highlight Skills -->
                <div class="flex flex-wrap gap-2 mt-5">

                    <span
                        class="skill-chip px-3 py-1.5 rounded-full bg-white shadow text-xs sm:text-sm font-medium text-gray-700">
                        Learning & Development
                    </span>

                    <span
                        class="skill-chip px-3 py-1.5 rounded-full bg-white shadow text-xs sm:text-sm font-medium text-gray-700">
                        Web Development
                    </span>

                    <span
                        class="skill-chip px-3 py-1.5 rounded-full bg-white shadow text-xs sm:text-sm font-medium text-gray-700">
                        Digital Marketing
                    </span>

                    <span
                        class="skill-chip px-3 py-1.5 rounded-full bg-white shadow text-xs sm:text-sm font-medium text-gray-700">
                        SEO Specialist
                    </span>
                    <span
                        class="skill-chip px-3 py-1.5 rounded-full bg-white shadow text-xs sm:text-sm font-medium text-gray-700">
                        Customer Service
                    </span>

                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-3 mt-6">

                    <a href="#projects"
                        class="hero-btn px-5 py-2.5 rounded-full bg-emerald-600 text-white text-sm font-semibold shadow-lg hover:bg-emerald-700 hover:scale-105 duration-300">

                        View Projects →

                    </a>

                    <a href="https://wa.me/message/7DX4JYEERP4NN1"
    target="_blank"
    rel="noopener noreferrer"
    class="hero-btn px-5 py-2.5 rounded-full border border-gray-300 text-sm font-semibold hover:border-emerald-600 hover:text-emerald-600 hover:scale-105 duration-300">

    Contact Me

</a>

                </div>

                <!-- Social -->
                <div class="flex gap-4 mt-6 text-lg text-slate-700">

                    <a href="#" class="social-icon hover:text-emerald-600 inline-block">
                        <i class="fab fa-github"></i>
                    </a>

                    <a href="#" class="social-icon hover:text-emerald-600 inline-block">
                        <i class="fab fa-linkedin"></i>
                    </a>

                    <a href="#" class="social-icon hover:text-emerald-600 inline-block">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="mailto:your@email.com"
                        class="social-icon hover:text-emerald-600 inline-block">
                        <i class="fas fa-envelope"></i>
                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="relative flex justify-center items-center animate-fade-in h-full py-10">

                <!-- Floating Wrapper -->
                <div class="relative flex justify-center items-center animate-float">

                    <!-- Yellow Circle -->
                    <div
                        class="absolute w-[180px] h-[180px] sm:w-[210px] sm:h-[210px] bg-yellow-400 rounded-full animate-blob">
                    </div>

                    <!-- Green Ring -->
                    <div
                        class="absolute w-[230px] h-[230px] sm:w-[260px] sm:h-[260px] border-[14px] border-emerald-600 rounded-full opacity-10 animate-spin-slow">
                    </div>

                    <!-- Profile Image -->
                    <img src="{{ asset('images/cv.png') }}"
                        alt="Retno Suprihatin"
                        class="relative z-20 w-[190px] sm:w-[220px] lg:w-[250px] object-contain">

                </div>

                <!-- Badge 1 -->
                <div
                    class="absolute bottom-2 left-0 sm:left-2 bg-white rounded-full shadow-xl px-3 py-2 flex items-center gap-2 z-30 animate-bounce-slow">

                    <div
                        class="w-8 h-8 rounded-full bg-emerald-600 text-white flex items-center justify-center text-sm">

                        <i class="fas fa-briefcase"></i>

                    </div>

                    <div>

                        <p class="font-bold text-slate-900 text-xs">
                            Professional Skills
                        </p>

                        <p class="text-[10px] text-gray-500">
                            Service • Admin • Marketing
                        </p>

                    </div>

                </div>

                <!-- Badge 2 -->
                <div
                    class="absolute top-6 right-0 sm:right-2 bg-yellow-400 rounded-full px-4 py-1.5 shadow-xl text-xs sm:text-sm font-semibold text-slate-900 z-30 animate-bounce-slow"
                    style="animation-delay:.6s;">

                    Open to Work

                </div>

                <!-- Experience Card -->
                <div
                    class="absolute right-0 bottom-14 sm:right-2 bg-white rounded-2xl px-4 py-3 shadow-xl z-30 animate-bounce-slow"
                    style="animation-delay:1.2s;">

                    <h3 class="text-2xl font-black text-emerald-600">
                        6+
                    </h3>

                    <p class="text-gray-500 text-[10px] leading-4">
                        Projects<br>
                        Completed
                    </p>

                </div>

                <!-- Mini Card -->
                <div
                    class="absolute top-20 -left-2 sm:left-0 bg-white rounded-2xl px-3 py-2 shadow-lg z-30 animate-bounce-slow"
                    style="animation-delay:1.8s;">

                    <div class="flex items-center gap-2">

                        <div
                            class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-sm">

                            <i class="fas fa-users"></i>

                        </div>

                        <div>

                            <p class="text-xs font-bold text-slate-900">
                                Team Player
                            </p>

                            <p class="text-[10px] text-gray-500">
                                Communication & Collaboration
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* ========================= FLOAT PHOTO ========================= */
@keyframes float { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-14px);} }
.animate-float{ animation:float 5s ease-in-out infinite; }

/* ========================= YELLOW CIRCLE ========================= */
@keyframes blob { 0%,100%{transform:scale(1);} 50%{transform:scale(1.08);} }
.animate-blob{ animation:blob 4s ease-in-out infinite; }

/* ========================= SPIN RING ========================= */
@keyframes spin-slow { from{transform:rotate(0deg);} to{transform:rotate(360deg);} }
.animate-spin-slow{ animation:spin-slow 18s linear infinite; }

/* ========================= FLOATING BADGE ========================= */
@keyframes bounce-slow { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-8px);} }
.animate-bounce-slow{ animation:bounce-slow 3.5s ease-in-out infinite; }

/* ========================= BACKGROUND ========================= */
@keyframes pulse-slow { 0%,100%{opacity:.45;transform:scale(1);} 50%{opacity:.7;transform:scale(1.08);} }
.animate-pulse-slow{ animation:pulse-slow 7s ease-in-out infinite; }

/* ========================= BLINK DOT ========================= */
@keyframes blink { 0%,100%{opacity:1;} 50%{opacity:.35;} }
.animate-blink{ animation:blink 1.8s infinite; }

/* ========================= LEFT CONTENT ========================= */
@keyframes fade-in-up { from{opacity:0;transform:translateY(30px);} to{opacity:1;transform:translateY(0);} }
.animate-fade-in-up{ animation:fade-in-up .8s ease forwards; }

/* ========================= RIGHT CONTENT ========================= */
@keyframes fade-in { from{opacity:0;transform:scale(.96);} to{opacity:1;transform:scale(1);} }
.animate-fade-in{ animation:fade-in 1s ease forwards; animation-delay:.2s; }

/* ========================= SOCIAL ICON ========================= */
.social-icon{ transition:.35s; }
.social-icon:hover{ transform:translateY(-6px) scale(1.08); }

/* ========================= BUTTON EFFECT ========================= */
.hero-btn{ transition:.35s; }
.hero-btn:hover{ transform:translateY(-3px); }

/* ========================= SKILL CHIP ========================= */
.skill-chip{ transition:.35s; }
.skill-chip:hover{ background:#059669; color:#fff; transform:translateY(-3px); }

/* ========================= MOBILE ========================= */
@media(max-width:768px){
    #home{ min-height:auto !important; padding-top:130px; padding-bottom:60px; }
    #home h1{ font-size:1.9rem; line-height:1.2; }
    #home p{ font-size:14px; }
}

</style>