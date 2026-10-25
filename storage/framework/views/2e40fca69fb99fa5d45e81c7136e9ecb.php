

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-6 pt-32 pb-16">
    <div class="mb-10">
        <h1 class="text-4xl font-extrabold text-white mb-2">Dashboard Pengguna</h1>
        <p class="text-gray-400">Selamat datang! Ini adalah ringkasan aktivitas belajarmu.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- KOLOM FAVORIT -->
        <div class="bg-[#0a1f33]/80 backdrop-blur-xl p-6 rounded-3xl border border-white/10 shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                Materi Favoritmu
            </h2>
            
            <div id="favorites-list" class="space-y-4">
                <!-- Diisi oleh JavaScript -->
            </div>
        </div>

        <!-- KOLOM HASIL AKTIVITAS (DARI LOCAL STORAGE) -->
        <div class="bg-[#0a1f33]/80 backdrop-blur-xl p-6 rounded-3xl border border-white/10 shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Riwayat Kuis Kamu
            </h2>
            
            <div id="riwayat-list" class="space-y-4">
                <!-- Diisi oleh JavaScript -->
            </div>
        </div>

    </div>
</div>

<!-- SCRIPT UNTUK MENAMPILKAN FAVORIT & RIWAYAT KUIS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- TAMPILKAN FAVORIT ---
        let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        let favContainer = document.getElementById('favorites-list');
        
        if (favorites.length === 0) {
            favContainer.innerHTML = '<p class="text-gray-500 text-center py-4">Belum ada materi yang disimpan.</p>';
        } else {
            favContainer.innerHTML = favorites.map(fav => `
                <div class="bg-white/5 border border-white/10 p-4 rounded-xl flex justify-between items-center">
                    <div>
                        <h3 class="text-white font-bold">${fav.judul}</h3>
                        <p class="text-sm text-gray-400">${fav.kategori}</p>
                    </div>
                    <a href="/detail-materi/${fav.id}" class="px-4 py-2 bg-teal-500 text-black text-sm font-bold rounded-lg hover:bg-teal-400 transition">Baca</a>
                </div>
            `).join('');
        }

        // --- TAMPILKAN RIWAYAT KUIS ---
        let riwayat = JSON.parse(localStorage.getItem('riwayat_kuis')) || [];
        let riwayatContainer = document.getElementById('riwayat-list');

        if (riwayat.length === 0) {
            riwayatContainer.innerHTML = '<p class="text-gray-500 text-center py-4">Belum ada kuis yang dikerjakan.</p>';
        } else {
            riwayatContainer.innerHTML = riwayat.map(item => `
                <div class="bg-white/5 border border-white/10 p-4 rounded-xl flex justify-between items-center">
                    <div>
                        <h3 class="text-white font-bold">${item.judul}</h3>
                        <p class="text-sm text-gray-400">${item.tanggal}</p>
                    </div>
                    <span class="text-2xl font-black text-teal-400">${item.skor}</span>
                </div>
            `).join('');
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Herd\discoveria\resources\views/dashboard.blade.php ENDPATH**/ ?>