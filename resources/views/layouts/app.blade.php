<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Discoveria - Platform Belajar</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            body { font-family: 'Outfit', sans-serif; }
            .bg-grid-pattern {
                background-size: 40px 40px;
                background-image: 
                    linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            }
        </style>
    </head>
    <body x-data="{ mobileMenuOpen: false }" class="antialiased selection:bg-amber-500 selection:text-black flex flex-col min-h-screen relative overflow-x-hidden">
        
        <div class="fixed inset-0 z-[-1] bg-gradient-to-br from-[#041e22] via-[#063235] to-[#0a1f33]">
            <div class="absolute inset-0 bg-grid-pattern"></div>
            <div class="absolute top-[-10%] left-[-10%] w-[600px] h-[600px] bg-teal-600 rounded-full mix-blend-screen filter blur-[120px] opacity-30"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-blue-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>
        </div>

        <nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-6xl z-50">
            <div class="bg-[#0a1f33]/80 backdrop-blur-xl border border-white/10 rounded-3xl md:rounded-full px-6 py-3 shadow-2xl flex flex-col md:flex-row justify-between items-center transition-all duration-300">
                
                <div class="flex justify-between items-center w-full md:w-auto">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-teal-400 to-teal-600 text-black rounded-xl flex items-center justify-center font-black text-xl shadow-[0_0_15px_rgba(45,212,191,0.5)] group-hover:scale-105 transition-transform">D</div>
                        <span class="text-xl font-bold text-white tracking-tight">Discoveria</span>
                    </a>
                    
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white focus:outline-none">
                        <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg x-show="mobileMenuOpen" style="display: none;" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <div class="hidden md:flex gap-8 font-semibold text-gray-300 text-sm">
                    <a href="/" class="{{ request()->is('/') ? 'text-teal-400' : 'hover:text-white' }} transition">Beranda</a>
                    <a href="/kategori" class="{{ request()->is('kategori') ? 'text-teal-400' : 'hover:text-white' }} transition">Kategori</a>
                    <a href="/materi" class="{{ request()->is('materi') ? 'text-teal-400' : 'hover:text-white' }} transition">Materi</a>
                </div>

                <!-- Tombol Kanan (Desktop) -->
                <div class="hidden md:flex gap-3 items-center">
                    @if(session('is_logged_in'))
                        <a href="/dashboard" class="text-white font-bold text-sm hover:text-teal-400 transition">Dashboard</a>
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-5 py-2 bg-white/10 text-white rounded-full text-sm font-bold hover:bg-white/20 transition">Keluar</button>
                        </form>
                    @else
                        <a href="/login" class="text-gray-300 font-bold text-sm hover:text-white transition">Masuk</a>
                        <a href="/register" class="px-6 py-2.5 bg-teal-500 text-black rounded-full text-sm font-bold shadow-[0_0_15px_rgba(20,184,166,0.4)] hover:bg-teal-400 hover:-translate-y-0.5 transition-all">Mulai Gratis</a>
                    @endif
                </div>

                <!-- Menu Mobile Dropdown -->
                <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" style="display: none;" 
                     x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                     class="md:hidden w-full mt-4 flex flex-col gap-4 border-t border-white/10 pt-4 pb-2">
                    <a href="/" class="text-gray-300 font-semibold hover:text-white">Beranda</a>
                    <a href="/kategori" class="text-gray-300 font-semibold hover:text-white">Kategori</a>
                    <a href="/materi" class="text-gray-300 font-semibold hover:text-white">Materi</a>
                    
                    @if(session('is_logged_in'))
                        <hr class="border-white/10 my-1">
                        <a href="/dashboard" class="text-teal-400 font-bold">Dashboard</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="text-red-400 font-bold">Keluar</button>
                        </form>
                    @else
                        <hr class="border-white/10 my-1">
                        <a href="/login" class="text-gray-300 font-semibold hover:text-white">Masuk</a>
                        <a href="/register" class="text-center bg-teal-500 text-black px-4 py-2 rounded-full font-bold">Mulai Gratis</a>
                    @endif
                </div>

            </div>
        </nav>

        <main class="flex-grow">
            @yield('content')
        </main>

        <footer class="border-t border-white/10 py-8 mt-20 z-10 relative backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-teal-500 text-black rounded-lg flex items-center justify-center font-bold text-sm">D</div>
                    <span class="text-lg font-bold text-white">Discoveria</span>
                </div>
                <p class="text-gray-500 text-sm">&copy; 2026 Discoveria.</p>
            </div>
        </footer>

    </body>
</html>