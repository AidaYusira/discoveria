@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-6 py-12">
    <div class="w-full max-w-md bg-[#0a1f33]/80 backdrop-blur-xl p-8 rounded-3xl shadow-2xl border border-white/10">
        
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-white mb-2">Selamat Datang!</h2>
            <p class="text-gray-400">Masuk untuk melanjutkan belajarmu.</p>
        </div>

        <!-- Menampilkan pesan error (misal: password salah) -->
        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-500/50 text-red-300 p-4 rounded-xl mb-6 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-bold text-gray-300 mb-2">Alamat Email</label>
                <input type="email" name="email" placeholder="nama@email.com" class="w-full px-4 py-3 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:border-teal-500 focus:ring-2 focus:ring-teal-500/50 outline-none transition" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-300 mb-2">Password</label>
                <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:border-teal-500 focus:ring-2 focus:ring-teal-500/50 outline-none transition" required>
            </div>
            <button type="submit" class="w-full py-3.5 bg-teal-500 text-black font-bold rounded-xl shadow-[0_0_15px_rgba(20,184,166,0.4)] hover:bg-teal-400 hover:-translate-y-0.5 transition-all mt-4">
                Masuk Sekarang
            </button>
        </form>

        <p class="text-center text-sm text-gray-400 mt-8">
            Belum punya akun? <a href="/register" class="font-bold text-teal-400 hover:underline">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection