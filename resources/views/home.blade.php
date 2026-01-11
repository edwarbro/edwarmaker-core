<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta['title'] }}</title>
    <meta name="description" content="{{ $meta['desc'] }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        serif: ['Cinzel', 'serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        gold: { 100: '#F9F1D8', 300: '#E8D08D', 500: '#D4AF37', 700: '#AA8C2C', 900: '#5F4B0E' },
                        warm: { rose: '#F43F5E', orange: '#F97316' },
                        spiritual: { void: '#050505', purple: '#6D28D9' }
                    },

                    // Tambahkan di dalam extend -> animation
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'spin-slow': 'spin 15s linear infinite',
                        'gradient-xy': 'gradient-xy 3s ease infinite', // TAMBAHAN
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;800&family=Plus+Jakarta+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(to bottom, #AA8C2C, #F43F5E); border-radius: 10px; }
        .glass-panel { background: rgba(20, 20, 20, 0.6); backdrop-filter: blur(16px); border: 1px solid rgba(212, 175, 55, 0.1); }
        .reveal-on-scroll { opacity: 0; transform: translateY(30px); transition: all 1s cubic-bezier(0.2, 0.8, 0.2, 1); }
        .reveal-on-scroll.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="bg-spiritual-void text-slate-300 font-sans selection:bg-gold-500 selection:text-black overflow-x-hidden">

    <nav class="fixed top-0 w-full z-50 py-4 transition-all duration-300 bg-black/80 backdrop-blur-xl border-b border-white/5">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3 group">
                <div class="relative w-12 h-12 flex items-center justify-center bg-gradient-to-br from-white to-gold-100 border border-gold-500/30 rounded-full overflow-hidden shadow-[0_0_15px_rgba(212,175,55,0.5)] group-hover:scale-105 transition-transform">
                    <img src="{{ asset('asset/images/logos.png') }}" alt="Logo" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                    <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-gold-500 to-warm-rose hidden">
                        <span class="text-black font-serif font-bold text-xl">E</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif font-bold text-white tracking-widest leading-none">EDWAR<span class="text-gold-500">MAKER</span></span>
                    <span class="text-[10px] text-gray-400 uppercase tracking-[0.2em]">Ecosystem</span>
                </div>
            </a>
            <div class="hidden md:flex gap-8 items-center text-sm font-medium">
                <a href="#vision" class="hover:text-gold-300 transition-colors">Visi</a>
                <a href="#products" class="hover:text-gold-300 transition-colors">Produk & Karya</a>
                <a href="#partner" class="hover:text-gold-300 transition-colors">Partnership</a>
            </div>
            <a href="https://wa.me/628175122454" class="px-6 py-2 bg-white/5 border border-gold-500/30 text-gold-400 hover:bg-gold-500 hover:text-black transition-all rounded-full text-xs font-bold uppercase tracking-wider">
                Join Ecosystem
            </a>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center opacity-20 pointer-events-none">
            <div class="w-[600px] h-[600px] border border-gold-500/20 rounded-full animate-spin-slow"></div>
            <div class="absolute w-[400px] h-[400px] border border-warm-rose/20 rounded-full animate-spin-slow" style="animation-direction: reverse;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-8 rounded-full border border-gold-500/30 bg-gold-900/10 backdrop-blur-md">
                <i data-lucide="sparkles" class="w-3 h-3 text-gold-400"></i>
                <span class="text-gold-300 text-xs font-mono tracking-widest uppercase">The Venture Builder</span>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif font-black text-white tracking-tight leading-none mb-8 reveal-on-scroll">
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-500 text-2xl md:text-3xl font-sans font-light tracking-[0.5em] mb-4">{{ $hero['headline_pre'] }}</span>
                {{ $hero['headline_main'] }}
            </h1>

            <p class="max-w-3xl mx-auto text-lg md:text-xl text-gray-400 font-light leading-relaxed mb-12 reveal-on-scroll">
                {{ $hero['subheadline'] }}
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-6 reveal-on-scroll">
                <a href="#products" class="relative px-8 py-4 rounded-full font-bold text-white overflow-hidden group shadow-[0_0_20px_rgba(249,115,22,0.4)] hover:shadow-[0_0_40px_rgba(249,115,22,0.6)] transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-600 via-amber-500 to-orange-600 animate-gradient-xy"></div>
                    <div class="absolute inset-0 bg-white/20 group-hover:bg-transparent transition-colors"></div>

                    <span class="relative flex items-center gap-2">
                        {{ $hero['cta_primary'] }} <i data-lucide="rocket" class="w-4 h-4"></i>
                    </span>
                </a>
                <a href="https://wa.me/628175122454" class="px-8 py-4 border border-white/20 text-white rounded-full hover:bg-white/5 hover:border-gold-500 transition-colors">
                    {{ $hero['cta_secondary'] }}
                </a>
            </div>
        </div>
    </header>

    <section id="vision" class="py-24 relative bg-neutral-900/30">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="reveal-on-scroll">
                <div class="relative rounded-2xl overflow-hidden border border-white/10 group">
                    <img src="{{ asset('asset/images/profile.png') }}" alt="Edwar" class="w-full grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <p class="text-gold-500 font-serif italic text-xl">"{{ $profile['philosophy'] }}"</p>
                    </div>
                </div>
            </div>
            <div class="reveal-on-scroll">
                <h2 class="text-gold-500 font-mono text-sm tracking-widest mb-4">/// THE ARCHITECT</h2>
                <h3 class="text-4xl font-serif font-bold text-white mb-6">Membangun Akar dari Masa Depan</h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    {{ $profile['story'] }}
                </p>
                <div class="flex flex-wrap gap-3">
                    @foreach($profile['skills'] as $skill)
                    <span class="px-3 py-1 bg-white/5 border border-white/10 rounded text-xs text-gray-300">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-32 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20 reveal-on-scroll">
                <h2 class="text-warm-rose font-mono text-sm tracking-widest mb-4">/// DIGITAL ECOSYSTEM</h2>
                <h3 class="text-5xl font-serif font-bold text-white mb-4">Galaksi Inovasi</h3>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Kumpulan aplikasi dan platform yang sedang kami bangun untuk menjawab tantangan zaman dengan pendekatan STIFIn.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $prod)
                <div class="group relative glass-panel rounded-2xl p-8 hover:-translate-y-2 transition-transform duration-500 reveal-on-scroll">
                    <div class="absolute top-4 right-4 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider
                        {{ $prod['status'] == 'Flagship' ? 'bg-gold-500 text-black' : 'bg-white/10 text-gray-400' }}">
                        {{ $prod['status'] }}
                    </div>

                    <div class="mb-6">
                        <span class="text-xs font-mono text-gold-500/80 mb-2 block">{{ $prod['category'] }}</span>
                        <h4 class="text-2xl font-bold text-white font-serif group-hover:text-gold-400 transition-colors">
                            {{ $prod['title'] }}
                        </h4>
                    </div>

                    <p class="text-sm text-gray-400 leading-relaxed mb-8 border-l-2 border-white/10 pl-4 group-hover:border-gold-500 transition-colors">
                        {{ $prod['desc'] }}
                    </p>

                    <div class="flex items-center gap-2 text-xs font-medium text-white/50 group-hover:text-white transition-colors cursor-pointer">
                        <span>Pelajari Konsep</span>
                        <i data-lucide="arrow-right" class="w-3 h-3"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="ukm-offer" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1600')] bg-cover bg-center opacity-10 grayscale"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/90 to-black/80"></div>

        <div class="container mx-auto px-6 relative z-10 text-center reveal-on-scroll">
            <div class="max-w-4xl mx-auto border border-white/10 bg-white/5 backdrop-blur-md rounded-3xl p-8 md:p-12 relative overflow-hidden group hover:border-gold-500/50 transition-colors duration-500">

                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-rose-600 rounded-2xl mx-auto mb-8 flex items-center justify-center shadow-lg transform rotate-3 group-hover:rotate-12 transition-transform duration-500">
                    <i data-lucide="trending-up" class="w-10 h-10 text-white"></i>
                </div>

                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-6">
                    {{ $ukm_offer['title'] }}
                </h2>

                <p class="text-xl text-gray-300 mb-10 leading-relaxed font-light">
                    {{ $ukm_offer['desc'] }}
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="https://wa.me/628175122454?text=Halo%20Edwar,%20saya%20mau%20konsultasi%20pembuatan%20aplikasi%20untuk%20bisnis%20saya." class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-gold-500 hover:bg-gold-400 text-black font-bold rounded-full transition-all duration-300 shadow-[0_0_20px_rgba(212,175,55,0.4)] transform hover:-translate-y-1">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                        {{ $ukm_offer['cta'] }}
                    </a>
                    <a href="#products" class="inline-flex items-center justify-center gap-3 px-8 py-4 border border-white/20 hover:bg-white hover:text-black text-white font-medium rounded-full transition-all duration-300">
                        Lihat Contoh Aplikasi
                    </a>
                </div>
            </div>

            <p class="mt-8 text-sm text-gray-500">
                *Khusus UKM & Perusahaan yang serius ingin bertumbuh.
            </p>
        </div>
    </section>

    <footer class="bg-black py-12 border-t border-white/5 text-center">
        <div class="container mx-auto px-6">
            <span class="font-serif font-bold text-white text-2xl tracking-widest">EDWAR<span class="text-gold-500">MAKER</span></span>
            <p class="text-gray-500 text-sm mt-4 max-w-md mx-auto">
                Pusat Inkubasi & Ekosistem Digital Berbasis Genetik.
                <br>Surabaya, Indonesia.
            </p>
            <div class="mt-8 text-xs text-gray-700">
                &copy; 2026 EdwarMaker Holdings.
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Scroll Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal-on-scroll').forEach((el) => observer.observe(el));
    </script>
</body>
</html>