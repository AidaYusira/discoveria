@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen pb-20">
    <!-- Header Kategori -->
    <div class="bg-[#0f172a] py-20 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center opacity-20"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-4">Jelajahi Kategori</h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Pilih topik yang ingin kamu kuasai dan mulai perjalanan belajarmu hari ini.</p>
        </div>
    </div>

    <!-- Bento Grid Kategori -->
    <div class="max-w-6xl mx-auto px-6 -mt-10 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card 1: Teknologi (Besar) -->
            <a href="/materi?kategori=Teknologi" class="md:col-span-2 bg-gradient-to-br from-blue-600 to-indigo-800 rounded-3xl p-10 text-white shadow-2xl hover:shadow-blue-500/50 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden group">
                <div class="absolute -right-10 -bottom-10 opacity-20 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-64 h-64" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-2">Teknologi</h3>
                    <p class="text-blue-100 mb-6">6 Materi Tersedia</p>
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-bold">Jelajahi &rarr;</span>
                </div>
            </a>

            <!-- Card 2: Sains -->
            <a href="/materi?kategori=Sains" class="bg-gradient-to-br from-green-500 to-emerald-700 rounded-3xl p-8 text-white shadow-2xl hover:shadow-green-500/50 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden group">
                <div class="absolute -right-5 -bottom-5 opacity-20 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-40 h-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-2">Sains</h3>
                    <p class="text-green-100 mb-6">6 Materi Tersedia</p>
                </div>
            </a>

            <!-- Card 3: Sejarah -->
            <a href="/materi?kategori=Sejarah" class="bg-gradient-to-br from-orange-500 to-red-700 rounded-3xl p-8 text-white shadow-2xl hover:shadow-orange-500/50 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden group">
                <div class="absolute -right-5 -bottom-5 opacity-20 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-40 h-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-2">Sejarah</h3>
                    <p class="text-orange-100 mb-6">6 Materi Tersedia</p>
                </div>
            </a>

            <!-- Card 4: Seni (Besar) -->
            <a href="/materi?kategori=Seni" class="md:col-span-2 bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl p-10 text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden group">
                <div class="absolute -right-10 -bottom-10 opacity-20 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-64 h-64" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-2">Seni & Kreativitas</h3>
                    <p class="text-pink-100 mb-6">6 Materi Tersedia</p>
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-bold">Jelajahi &rarr;</span>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection