@extends('layouts.app')

@section('content')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div x-data="{ 
    showQuiz: false, currentQ: 0, score: 0, answered: false, selectedOpt: null,
    qList: @js($materi->quizzes),
    selectAnswer(opt) {
        if (this.answered) return;
        this.selectedOpt = opt;
        this.answered = true;
        if (opt === this.qList[this.currentQ].a) {
            this.score += 100 / this.qList.length;
        }
    },
    nextQuestion() {
        if (this.currentQ < this.qList.length - 1) {
            this.currentQ++; this.answered = false; this.selectedOpt = null;
        } else {
            this.showQuiz = false;
            this.simpanSkor(); // Simpan skor saat selesai
        }
    },
    resetQuiz() {
        this.score = 0; this.currentQ = 0; this.answered = false; this.selectedOpt = null; this.showQuiz = true;
    },
    simpanSkor() {
        let riwayat = JSON.parse(localStorage.getItem('riwayat_kuis')) || [];
        riwayat.unshift({
            judul: '{{ $materi->judul }}',
            skor: Math.round(this.score),
            tanggal: new Date().toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })
        });
        localStorage.setItem('riwayat_kuis', JSON.stringify(riwayat));
    }
}" class="max-w-4xl mx-auto px-6 py-16">

    <div class="mb-10 text-center">
        <span class="bg-teal-500/20 border border-teal-500/30 text-teal-300 px-4 py-1.5 rounded-full text-sm font-bold mb-4 inline-block">{{ $materi->category->nama }}</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">{{ $materi->judul }}</h1>
        
        <!-- Tombol Simpan Favorit -->
        @if(session('is_logged_in'))
            <button onclick="simpanFavorit()" class="px-6 py-2 bg-amber-400 text-black font-bold rounded-full shadow-lg hover:bg-amber-300 transition inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                Simpan ke Favorit
            </button>
        @else
            <a href="/login" class="px-6 py-2 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition inline-block">Login untuk Menyimpan Favorit</a>
        @endif
    </div>

    <img src="{{ $materi->gambar }}" class="w-full h-[400px] object-cover rounded-3xl shadow-2xl mb-12 border border-white/10">

    <div class="prose prose-lg prose-invert max-w-none text-gray-300 leading-relaxed">
        {!! $materi->konten !!}
    </div>

    <!-- KUIS INTERAKTIF -->
    <div class="mt-16 bg-[#0a1f33]/80 backdrop-blur-xl rounded-3xl p-8 md:p-12 shadow-2xl border border-white/10">
        <div class="text-center mb-8">
            <h3 class="text-3xl font-extrabold text-white mb-2">Kuis Pemahaman</h3>
            <p class="text-gray-400">Uji pemahamanmu dengan {{ count($materi->quizzes) }} pertanyaan berikut.</p>
        </div>

        <div x-show="!showQuiz && score === 0" class="text-center">
            <button @click="showQuiz = true" class="px-8 py-3 bg-teal-500 hover:bg-teal-400 text-black font-bold rounded-full transition-all">Mulai Uji Pemahaman</button>
        </div>

        <div x-show="showQuiz" style="display: none;" class="max-w-2xl mx-auto">
            <div class="flex justify-between text-sm text-gray-400 mb-6 font-bold">
                <span x-text="'Pertanyaan ' + (currentQ + 1) + ' dari ' + qList.length"></span>
                <span x-text="'Skor: ' + Math.round(score)"></span>
            </div>
            
            <p class="text-xl font-bold text-white mb-6" x-text="qList[currentQ].q"></p>
            
            <div class="space-y-3">
                <template x-for="opt in qList[currentQ].opts" :key="opt">
                    <button @click="selectAnswer(opt)" 
                            :class="{
                                'bg-teal-600 border-teal-500 text-white': answered && opt === qList[currentQ].a,
                                'bg-red-600 border-red-500 text-white': answered && opt !== qList[currentQ].a && opt === selectedOpt,
                                'bg-white/5 border-white/10 hover:bg-white/10 text-gray-300': !answered
                            }"
                            class="w-full text-left px-6 py-4 rounded-xl border transition-all font-medium" 
                            x-text="opt"></button>
                </template>
            </div>
            
            <div x-show="answered" style="display: none;" class="mt-6 text-right">
                <button @click="nextQuestion()" class="px-6 py-2 bg-amber-400 text-black rounded-full font-bold transition" x-text="currentQ === qList.length - 1 ? 'Selesai' : 'Lanjut \u2192'"></button>
            </div>
        </div>

        <div x-show="!showQuiz && score > 0" style="display: none;" class="text-center py-8">
            <div class="text-6xl mb-4">🏆</div>
            <h4 class="text-2xl font-bold text-white mb-2">Kuis Selesai!</h4>
            <p class="text-gray-400 mb-6">Skor Akhir Kamu: <span class="text-teal-400 font-extrabold text-3xl" x-text="Math.round(score)"></span> / 100</p>
            <button @click="resetQuiz()" class="px-6 py-2 bg-white/10 hover:bg-white/20 rounded-full text-sm font-bold text-white transition">Ulangi Kuis</button>
        </div>
    </div>
</div>

<!-- SCRIPT LOCAL STORAGE FAVORIT -->
<script>
    function simpanFavorit() {
        let judul = "{{ $materi->judul }}";
        let kategori = "{{ $materi->category->nama }}";
        let id = "{{ $materi->id }}";
        
        let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        
        if(!favorites.some(f => f.id === id)) {
            favorites.push({ id: id, judul: judul, kategori: kategori });
            localStorage.setItem('favorites', JSON.stringify(favorites));
            alert('Materi berhasil disimpan ke favorit!');
        } else {
            alert('Materi ini sudah ada di favoritmu.');
        }
    }
</script>
@endsection