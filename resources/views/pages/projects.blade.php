<section id="projects" class="max-w-6xl mx-auto px-6 py-20 bg-gray-50 rounded-3xl reveal">

    <p class="text-yellow-500 text-sm font-semibold uppercase tracking-wider mb-2">
        Portfolio
    </p>

    <h2 class="text-3xl font-bold text-slate-900">
        <span class="text-yellow-500">Projects</span> I've Built
    </h2>

    <div class="w-16 h-1 bg-yellow-400 mt-3 mb-10"></div>

    @php
    $projects = [

        [
            'title' => 'Sipensa',
            'image' => 'sipensa.png',
            'category' => 'Final Project',
            'tech' => 'React Js',
            'desc' => 'Web-based student attendance system integrated with QR Code and WhatsApp.',
            'detail' => 'Sipensa is a web-based student attendance system developed for schools. It utilizes QR Code technology for attendance recording and integrates WhatsApp notifications to automatically inform parents about student attendance. The system also includes dashboards for administrators, teachers, and school principals.'
        ],

        [
            'title' => 'Loka Tani',
            'image' => 'tani.png',
            'category' => 'E-Commerce',
            'tech' => 'React Js',
            'desc' => 'Agricultural marketplace platform for horticultural products.',
'detail' => 'Loka Tani is an e-commerce platform designed to connect farmers and consumers. The system includes product management, shopping cart, secure checkout, order management, and integrates Midtrans Payment Gateway to support safe and efficient online transactions. Built with a responsive interface, it provides a smooth and user-friendly shopping experience across devices.'        ],

        [
            'title' => 'KasirPro',
            'image' => 'kasirpro.png',
            'category' => 'Point of Sale',
            'tech' => 'Laravel',
            'desc' => 'Modern cashier and inventory management system.',
            'detail' => 'KasirPro is a POS application designed to simplify sales transactions, product management, inventory tracking, and financial reporting through an intuitive and modern dashboard.'
        ],

        [
            'title' => 'Learnify',
            'image' => 'learnify.png',
            'category' => 'Education',
            'tech' => 'React Js',
            'desc' => 'Online Learning Management System.',
            'detail' => 'Learnify is an LMS platform where teachers can upload learning materials, create assignments, monitor student progress, and manage online classes with a user-friendly interface.'
        ],

        [
            'title' => 'KelasKu',
            'image' => 'kelasku.png',
            'category' => 'Education',
            'tech' => 'PHP',
            'desc' => 'Digital classroom management platform.',
            'detail' => 'KelasKu is a classroom management website that helps teachers organize classes, distribute learning materials, manage assignments, and improve communication between teachers and students.'
        ],

        [
    'title' => 'Verdant',
    'image' => 'verdant.png',
    'category' => 'Tourism Ticketing',
    'tech' => 'React JS & Kotlin',
    'desc' => 'Digital ticketing system for Tepas Papandayan tourism.',
    'detail' => 'Verdant is a digital ticketing application developed for Tepas Papandayan tourist attraction. It allows visitors to explore destination information, book tickets online, complete secure cashless payments, and receive digital tickets for seamless entry. The application focuses on improving ticket management, reducing queues, and providing a convenient experience for visitors.'
],

    ];
    @endphp

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($projects as $index => $project)

        <div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden hover:border-yellow-400 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">

            <div class="relative h-52 overflow-hidden">

                <img src="{{ asset('images/' . $project['image']) }}"
                    alt="{{ $project['title'] }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-4 left-4 flex gap-2">

                    <span class="px-3 py-1 rounded-full bg-white text-xs font-semibold">
                        {{ $project['category'] }}
                    </span>

                    <span class="px-3 py-1 rounded-full bg-yellow-400 text-xs font-semibold">
                        {{ $project['tech'] }}
                    </span>

                </div>

            </div>

            <div class="p-6">

                <h3 class="font-bold text-lg text-slate-900 mb-2 group-hover:text-yellow-500 transition">
                    {{ $project['title'] }}
                </h3>

                <p class="text-gray-600 text-sm mb-5">
                    {{ $project['desc'] }}
                </p>

                <button
                    onclick="openModal({{ $index }})"
                    class="text-slate-900 font-semibold border-b-2 border-yellow-400 hover:text-yellow-500 transition">
                    View Details →
                </button>

            </div>

        </div>

        @endforeach

    </div>

</section>

<!-- MODAL -->
<div id="projectModal"
    class="fixed inset-0 bg-black/60 hidden items-center justify-center z-50 p-4">

    <div class="bg-white rounded-3xl max-w-lg w-full p-8 relative animate-modal">

        <button
            onclick="closeModal()"
            class="absolute top-4 right-5 text-3xl text-gray-500 hover:text-red-500">
            &times;
        </button>

        <h3 id="modalTitle"
            class="text-2xl font-bold text-slate-900 mb-4">
        </h3>

        <p id="modalDescription"
            class="text-gray-600 leading-relaxed">
        </p>

    </div>

</div>

<style>
.animate-modal{
    animation: modalShow .3s ease;
}

@keyframes modalShow{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}
</style>

<script>

const projects = @json($projects);

function openModal(index){

    document.getElementById('modalTitle').innerText =
        projects[index].title;

    document.getElementById('modalDescription').innerText =
        projects[index].detail;

    const modal = document.getElementById('projectModal');

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModal(){

    const modal = document.getElementById('projectModal');

    modal.classList.remove('flex');
    modal.classList.add('hidden');
}

document.getElementById('projectModal')
.addEventListener('click', function(e){

    if(e.target === this){
        closeModal();
    }

});

</script>