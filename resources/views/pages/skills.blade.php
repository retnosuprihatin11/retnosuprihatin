<section id="skills" class="max-w-6xl mx-auto px-6 py-20 reveal">

    <p class="text-yellow-500 text-sm font-semibold uppercase tracking-wider mb-2 text-center">
        Tools
    </p>

    <h2 class="text-3xl font-bold mb-4 text-slate-900 text-center">
        Tech <span class="text-yellow-500">Skills</span>
    </h2>

    <div class="w-16 h-1 bg-yellow-400 mb-14 mx-auto"></div>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-8">

        @foreach([
            ['logo' => 'react.webp', 'name' => 'React JS'],
            ['logo' => 'express.png', 'name' => 'Express JS'],
            ['logo' => 'Laravel.webp', 'name' => 'Laravel'],
            ['logo' => 'Php.png', 'name' => 'PHP'],
            ['logo' => 'Figma.webp', 'name' => 'Figma'],
            ['logo' => 'unity.png', 'name' => 'Unity'],
            ['logo' => 'Tailwind.webp', 'name' => 'Tailwind CSS'],
            ['logo' => 'mysql.png', 'name' => 'MySQL'],
            ['logo' => 'Postgresql.webp', 'name' => 'PostgreSQL'],
            ['logo' => 'seo.jpg', 'name' => 'SEO'],
            
        ] as $i => $skill)

        <div class="skill-card flex flex-col items-center text-center opacity-0 translate-y-8"
             style="transition-delay: {{ $i * 100 }}ms;">

            <div class="skill-icon">
                <img src="{{ asset('images/' . $skill['logo']) }}"
                     alt="{{ $skill['name'] }}">
            </div>

            <h4 class="mt-3 text-sm font-semibold text-slate-700">
                {{ $skill['name'] }}
            </h4>

        </div>

        @endforeach

    </div>

</section>

<style>

.skill-card{
    transition: all .6s ease;
}

.skill-card.in-view{
    opacity:1;
    transform:translateY(0);
}

.skill-icon{
    width:100px;
    height:100px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.skill-icon img{
    width:70px;
    height:70px;
    object-fit:contain;
    transition:all .3s ease;
}

.skill-card:hover{
    transform:translateY(-8px);
}

.skill-card:hover img{
    transform:scale(1.15);
}

.skill-card h4{
    transition:.3s;
}

.skill-card:hover h4{
    color:#10b981;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.skill-card');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){
                entry.target.classList.add('in-view');
            }

        });

    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });

});
</script>