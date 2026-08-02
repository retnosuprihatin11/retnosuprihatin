<header class="fixed top-0 left-0 w-full z-50 py-4">
    <nav class="max-w-5xl mx-auto px-4">

        <div
            class="relative bg-white/90 backdrop-blur-xl border border-gray-100 rounded-full shadow-lg shadow-gray-200/40 px-8 py-3 flex justify-center items-center">

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-2 text-sm font-medium">

                <a href="#home" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-house text-xs"></i>
                    Home
                </a>

                <a href="#about" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-user text-xs"></i>
                    About
                </a>

                <a href="#skills" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-code text-xs"></i>
                    Skills
                </a>

                <a href="#projects" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-folder-open text-xs"></i>
                    Projects
                </a>

                <a href="#experience" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-briefcase text-xs"></i>
                    Experience
                </a>

                <a href="#contact" data-nav-link
                    class="nav-link flex items-center gap-2 px-5 py-2 rounded-full text-gray-500 hover:bg-gray-100 hover:text-slate-900 transition-all duration-300">
                    <i class="fas fa-envelope text-xs"></i>
                    Contact
                </a>

            </div>

            <!-- Language -->
            <div
                class="hidden md:flex absolute right-8 items-center gap-2 text-sm font-medium text-gray-500">

                <i class="fas fa-globe text-xs"></i>
                ID

            </div>

            <!-- Mobile Button -->
            <button id="mobileMenuButton"
                class="md:hidden absolute right-5 text-slate-900">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

        <!-- Mobile Menu -->

        <div id="mobileMenu"
            class="hidden md:hidden mt-3 bg-white rounded-3xl shadow-xl overflow-hidden">

            <div class="flex flex-col divide-y divide-gray-100">

                <a href="#home" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-house text-xs"></i>
                    Home
                </a>

                <a href="#about" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-user text-xs"></i>
                    About
                </a>

                <a href="#skills" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-code text-xs"></i>
                    Skills
                </a>

                <a href="#projects" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-folder-open text-xs"></i>
                    Projects
                </a>

                <a href="#experience" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-briefcase text-xs"></i>
                    Experience
                </a>

                <a href="#contact" data-nav-link-mobile class="nav-link-mobile px-6 py-4 flex items-center gap-3 hover:bg-gray-50">
                    <i class="fas fa-envelope text-xs"></i>
                    Contact
                </a>

            </div>

        </div>

    </nav>
</header>

<script>

document.addEventListener('DOMContentLoaded', () => {

    const menuBtn = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

    });

    const navLinks = document.querySelectorAll('[data-nav-link]');
    const mobileLinks = document.querySelectorAll('[data-nav-link-mobile]');

    const sections = [...navLinks]
        .map(link => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    function setActive(id){

        navLinks.forEach(link=>{

            const active = link.getAttribute('href') === '#'+id;

            link.classList.toggle('bg-emerald-600',active);
            link.classList.toggle('text-white',active);
            link.classList.toggle('font-semibold',active);
            link.classList.toggle('shadow',active);

            link.classList.toggle('text-gray-500',!active);

        });

        mobileLinks.forEach(link=>{

            const active = link.getAttribute('href') === '#'+id;

            link.classList.toggle('bg-emerald-50',active);
            link.classList.toggle('text-emerald-600',active);
            link.classList.toggle('font-semibold',active);

        });

    }

    const observer = new IntersectionObserver(entries=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                setActive(entry.target.id);

            }

        });

    },{

        threshold:.45

    });

    sections.forEach(section=>observer.observe(section));

    navLinks.forEach(link=>{

        link.addEventListener('click',()=>{

            setActive(link.getAttribute('href').replace('#',''));

        });

    });

    mobileLinks.forEach(link=>{

        link.addEventListener('click',()=>{

            mobileMenu.classList.add('hidden');

            setActive(link.getAttribute('href').replace('#',''));

        });

    });

});

</script>