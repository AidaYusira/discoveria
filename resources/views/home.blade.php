@extends('layouts.app')

@section('content')
<div x-data="{ search: '' }">

    <section class="relative pt-36 pb-16">
        <div class="max-w-4xl mx-auto px-6 text-center z-10 relative">
            <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight leading-[1.1] mb-6 drop-shadow-lg">
                Kuasai Ilmu Baru <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-amber-200">Tanpa Batas.</span>
            </h1>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto font-medium">Temukan materi berkualitas, uji pemahamanmu dengan kuis, dan simpan favoritmu dalam satu platform eksklusif.</p>
            
            <div class="max-w-2xl mx-auto relative group">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-teal-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" x-model="search" placeholder="Cari materi impianmu..." class="w-full pl-16 pr-6 py-4 rounded-full border border-white/20 bg-[#0a1f33]/50 backdrop-blur-lg text-white placeholder-gray-400 shadow-2xl focus:border-teal-400 focus:ring-4 focus:ring-teal-500/30 outline-none text-lg transition-all duration-300">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 pb-20 relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- LOOPING DATA DARI DATABASE -->
            @foreach($materials as $item)
            <div x-show="'{{ strtolower($item->judul) }}'.includes(search.toLowerCase())" 
                 class="bg-[#0a1f33]/60 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/10 hover:border-teal-400/50 transition-all duration-500 group flex flex-col transform hover:-translate-y-2">
                <div class="h-44 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a1f33] to-transparent opacity-80 z-10"></div>
                    <img src="{{ $item->gambar }}?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 z-0 relative">
                    <div class="absolute top-4 left-4 bg-teal-500/20 backdrop-blur-md border border-teal-500/30 px-3 py-1 rounded-lg text-xs font-bold text-teal-300 z-20">{{ $item->category->nama }}</div>
                </div>
                <div class="p-6 flex flex-col flex-grow -mt-8 relative z-20">
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 leading-snug group-hover:text-teal-300 transition-colors">{{ $item->judul }}</h3>
                    <a href="/detail-materi/{{ $item->id }}" class="mt-auto block text-center w-full py-3 bg-white/5 text-gray-300 border border-white/10 rounded-xl font-bold group-hover:bg-teal-500 group-hover:text-black transition-all duration-300">Baca Materi</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection