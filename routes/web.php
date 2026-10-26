<?php
use Illuminate\Support\Facades\Route;
use App\Models\Material;
use Illuminate\Http\Request;

Route::get('/', function () { 
    $materials = Material::latest()->get();
    return view('home', compact('materials')); 
});

Route::get('/kategori', function () { return view('kategori'); });

Route::get('/materi', function (Request $request) { 
    $kategori = $request->query('kategori');
    if($kategori) {
        $materials = Material::whereHas('category', function($q) use ($kategori) {
            $q->where('nama', $kategori);
        })->get();
    } else {
        $materials = Material::latest()->get();
    }
    return view('materi', compact('materials', 'kategori')); 
});

Route::get('/detail-materi/{id}', function ($id) { 
    $materi = Material::findOrFail($id);
    return view('detail-materi', compact('materi')); 
});

// Simulasi Login
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/login', function () { session(['is_logged_in' => true]); return redirect('/dashboard'); });
Route::get('/register', function () { return view('auth.register'); });
Route::post('/register', function () { session(['is_logged_in' => true]); return redirect('/dashboard'); });
Route::post('/logout', function () { session()->forget('is_logged_in'); return redirect('/'); });

// Dashboard tanpa database
Route::get('/dashboard', function () { 
    if (!session('is_logged_in')) return redirect('/login');
    return view('dashboard'); 
});

Route::get('/setup/{token}', function ($token) {
    abort_unless(env('SETUP_TOKEN') && hash_equals(env('SETUP_TOKEN'), $token), 404);

    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    $out = \Illuminate\Support\Facades\Artisan::output();

    if (\App\Models\Material::count() === 0) {
        \App\Models\Category::query()->delete();
        \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
        $out .= \Illuminate\Support\Facades\Artisan::output();
    }

    return response('<pre>' . e($out) . '</pre>Jumlah materi: ' . \App\Models\Material::count());
});