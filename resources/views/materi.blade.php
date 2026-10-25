@extends('layouts.app')

@section('content')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div x-data="{
    filter: '{{ $kategori ?? 'Semua' }}',
    materials: [
        { id: 1, title: 'Belajar Dasar Pemrograman Web', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80' },
        { id: 2, title: 'Framework Laravel dari Nol', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80' },
        { id: 3, title: 'Mengenal UI/UX Design', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=800&q=80' },
        { id: 4, title: 'Dasar Keamanan Siber', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=800&q=80' },
        { id: 5, title: 'Pengenalan Cloud Computing', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=800&q=80' },
        { id: 6, title: 'Dasar Internet of Things (IoT)', category: 'Teknologi', img: 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80' },
        { id: 7, title: 'Mengenal Tata Surya Lebih Dekat', category: 'Sains', img: 'https://images.unsplash.com/photo-1507413245164-6160d8298b31?auto=format&fit=crop&w=800&q=80' },
        { id: 8, title: 'Fisika Kuantum Sederhana', category: 'Sains', img: 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=800&q=80' },
        { id: 9, title: 'Biologi: Sel dan Kehidupan', category: 'Sains', img: 'https://images.unsplash.com/photo-1530026405186-ed1f139313f8?auto=format&fit=crop&w=800&q=80' },
        { id: 10, title: 'Kimia Dasar: Reaksi Unsur', category: 'Sains', img: 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=800&q=80' },
        { id: 11, title: 'Hukum Newton dan Gerak', category: 'Sains', img: 'https://images.unsplash.com/photo-1636466497217-26a8cbeaf0aa?auto=format&fit=crop&w=800&q=80' },
        { id: 12, title: 'Ekosistem dan Rantai Makanan', category: 'Sains', img: 'https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?auto=format&fit=crop&w=800&q=80' },
        { id: 13, title: 'Jejak Peradaban Dunia Kuno', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1461360370896-922624d12aa1?auto=format&fit=crop&w=800&q=80' },
        
        // GAMBAR BARU 1: Bendera Indonesia (Merah Putih) - VALID
        { id: 14, title: 'Sejarah Kemerdekaan Indonesia', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1590240268573-4cb144791713?auto=format&fit=crop&w=800&q=80' },
        
        { id: 15, title: 'Revolusi Industri di Eropa', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1518972559570-7cc1309f3229?auto=format&fit=crop&w=800&q=80' },
        { id: 16, title: 'Perang Dunia I dan II', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1580136579312-94651dfd596d?auto=format&fit=crop&w=800&q=80' },
        
        // GAMBAR BARU 2: Candi Borobudur - VALID
        { id: 17, title: 'Kerajaan Majapahit dan Sriwijaya', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa?auto=format&fit=crop&w=800&q=80' },
        
        { id: 18, title: 'Peradaban Lembah Sungai Indus', category: 'Sejarah', img: 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=800&q=80' },
        { id: 19, title: 'Seni Desain Grafis untuk Pemula', category: 'Seni', img: 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=800&q=80' },
        { id: 20, title: 'Dasar Fotografi & Komposisi', category: 'Seni', img: 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?auto=format&fit=crop&w=800&q=80' },
        { id: 21, title: 'Seni Lukis dan Teori Warna', category: 'Seni', img: 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=800&q=80' },
        { id: 22, title: 'Musik: Teori dan Harmoni', category: 'Seni', img: 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=800&q=80' },
        
        // GAMBAR BARU 3: Patung Klasik (David) - VALID
        { id: 23, title: 'Seni Patung dan Media 3D', category: 'Seni', img: 'https://images.unsplash.com/photo-1577083552431-6e5fd01988a5?auto=format&fit=crop&w=800&q=80' },
        
        // GAMBAR BARU 4: Penari Tradisional - VALID
        { id: 24, title: 'Sejarah Seni Tari Tradisional', category: 'Seni', img: 'https://images.unsplash.com/photo-1549887534-1541e9326642?auto=format&fit=crop&w=800&q=80' }
    ],
    get filteredMateri() {
        if (this.filter === 'Semua' || !this.filter) return this.materials;
        return this.materials.filter(m => m.category === this.filter);
    }
}">

    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="mb-12 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">
                <span x-text="filter === 'Semua' || !filter ? 'Semua Materi' : 'Materi ' + filter"></span>
            </h1>
            
            <template x-if="filter !== 'Semua' && filter">
                <a href="/materi" class="inline-block mt-4 px-5 py-2 bg-white shadow-sm border border-gray-200 text-gray-700 font-bold rounded-full hover:bg-gray-50 transition">Tampilkan Semua Materi</a>
            </template>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <template x-for="item in filteredMateri" :key="item.id">
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgb(0,0,0,0.08)] transition-all duration-300 group flex flex-col">
                    <div class="h-44 overflow-hidden relative">
                        <img :src="item.img" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg text-xs font-bold text-gray-800" x-text="item.category"></div>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 leading-snug" x-text="item.title"></h3>
                        <a :href="'/detail-materi/' + item.id" class="mt-auto block text-center w-full py-2.5 bg-gray-50 text-gray-700 rounded-xl font-bold group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">Baca</a>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
@endsection