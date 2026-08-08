<section id="experience" class="max-w-6xl mx-auto px-6 py-20 reveal">
    <p class="text-yellow-500 text-sm font-semibold uppercase tracking-wider mb-2">
        JOURNEY
    </p>

    <h2 class="text-3xl font-bold mb-4 text-slate-900">
        Education &
        <span class="text-yellow-500">Experience</span>
    </h2>

    <div class="w-16 h-1 bg-yellow-400 mb-10"></div>

    <div class="grid lg:grid-cols-2 gap-8 items-stretch">

        <!-- ================= EDUCATION ================= -->
        <div class="bg-white border border-gray-200 rounded-2xl p-8 h-full flex flex-col">

            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-slate-900 text-sm"></i>
                </div>

                <h3 class="font-semibold text-2xl text-slate-900">
                    Education
                </h3>
            </div>

            <div class="space-y-6 flex-1">

                <div class="pt-4 border-t border-gray-100">

                    <p class="text-xs text-gray-400 font-semibold mb-2">
                        2022 - 2026
                    </p>

                    <h4 class="font-semibold text-xl text-slate-900">
                        Trunojoyo Madura University
                    </h4>

                    <p class="text-gray-500">
                        Bachelor of Informatics Education
                    </p>

                    <div class="mt-5 space-y-2 text-gray-600 text-sm">

                        <p>• GPA : 3.91 / 4.00</p>
                        <p>• Relevant Coursework :</p>

                        <ul class="ml-5 list-disc space-y-1">
                            <li>Web Programming</li>
                            <li>Database Systems</li>
                            <li>Object-Oriented Programming</li>
                            <li>Data Mining</li>
                            <li>Data Structures</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- ================= EXPERIENCE ================= -->
        <div class="bg-white border border-gray-200 rounded-2xl p-8 h-full flex flex-col">

            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center">
                    <i class="fas fa-briefcase text-slate-900 text-sm"></i>
                </div>

                <h3 class="font-semibold text-2xl text-slate-900">
                    Work Experience
                </h3>
            </div>

            <div class="space-y-6 flex-1">

                <!-- SMP -->
                <div>

                    <p class="text-xs text-yellow-500 font-semibold mb-2">
                        August 2025 - December 2025
                    </p>

                    <h4 class="font-semibold text-lg text-slate-900">
                        SMP Negeri 1 Bangkalan
                    </h4>

                    <p class="text-gray-500">
                        Informatics Teacher (Internship)
                    </p>

                </div>

                <!-- Infinite Learning -->
                <div class="pt-5 border-t border-gray-100">

                    <p class="text-xs text-gray-400 font-semibold mb-2">
                        August 2024 - December 2024
                    </p>

                    <h4 class="font-semibold text-lg text-slate-900">
                        PT Kinema Systrans Multimedia
                    </h4>

                    <p class="text-gray-500">
                        Web Development (Independent Study)
                    </p>

                </div>

                <!-- Nemob -->
                <div class="pt-5 border-t border-gray-100">

                    <p class="text-xs text-gray-400 font-semibold mb-2">
                        November 2023 - Present
                    </p>

                    <h4 class="font-semibold text-lg text-slate-900">
                        PT Pilihan Utama Indonesia (Nemob)
                    </h4>

                    <p class="text-gray-500">
                        Digital Marketing 
                    </p>

                </div>

                <!-- Akademi Prestasi -->
                <div class="pt-5 border-t border-gray-100">

                    <p class="text-xs text-gray-400 font-semibold mb-2">
                        October 2023 - January 2024
                    </p>

                    <h4 class="font-semibold text-lg text-slate-900">
                        PT Akademi Prestasi
                    </h4>

                    <p class="text-gray-500">
                        SEO & Digital Marketing
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- DOCUMENTATION -->
<!-- DOCUMENTATION -->
<section id="documentation" class="max-w-6xl mx-auto px-6 py-20 reveal">

    <!-- Heading -->
    <p class="text-yellow-500 text-sm font-semibold uppercase tracking-wider mb-2">
        Documentation
    </p>

    <h2 class="text-3xl font-bold text-slate-900">
        Teaching
        <span class="text-yellow-500">Activities</span>
    </h2>

    <div class="w-16 h-1 bg-yellow-400 mt-3 mb-10"></div>

    @php
        $docs = [
            'doc1.jpeg',
            'doc2.jpeg',
            'doc3.jpeg',
            'doc4.jpeg',
            'doc5.jpeg',
            'doc6.jpeg',
            'doc7.jpeg',
            'doc9.jpeg',
            'doc10.jpeg',
        ];
    @endphp

    <div class="flex flex-wrap justify-center gap-5">

        @foreach($docs as $doc)

        <div class="w-[calc(50%-10px)] sm:w-[calc(33.333%-14px)] group cursor-pointer">

            <div class="overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-500 aspect-[4/3]">

                <img
                    src="{{ asset('images/' . $doc) }}"
                    alt="Teaching Documentation"
                    onclick="openGallery(this.src)"
                    class="w-full h-full object-cover transition duration-500 group-hover:scale-110">

            </div>

        </div>

        @endforeach

    </div>

</section>

<div id="galleryModal"
    class="fixed inset-0 bg-black/90 hidden items-center justify-center z-[9999] p-6">

    <button
        onclick="closeGallery()"
        class="absolute top-6 right-8 text-white text-5xl hover:text-yellow-400">

        &times;

    </button>

    <img
        id="galleryImage"
        class="max-w-6xl max-h-[90vh] rounded-2xl">

</div>

<script>

function openGallery(src){

    document.getElementById("galleryImage").src = src;

    const modal = document.getElementById("galleryModal");

    modal.classList.remove("hidden");
    modal.classList.add("flex");

}

function closeGallery(){

    const modal = document.getElementById("galleryModal");

    modal.classList.remove("flex");
    modal.classList.add("hidden");

}

document.getElementById("galleryModal").addEventListener("click",function(e){

    if(e.target===this){

        closeGallery();

    }

});

</script>