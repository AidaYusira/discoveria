<?php
use Illuminate\Support\Facades\Route;
use App\Models\Material;

Route::get('/', function () { 
    $materials = Material::latest()->get();
    return view('home', compact('materials')); 
});

Route::get('/kategori', function () { return view('kategori'); });

Route::get('/materi', function (Illuminate\Http\Request $request) { 
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

// --- LOGIN SIMULASI (TANPA DATABASE) ---
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/login', function () { 
    session(['is_logged_in' => true]); 
    return redirect('/dashboard'); 
});
Route::get('/register', function () { return view('auth.register'); });
Route::post('/register', function () { 
    session(['is_logged_in' => true]); 
    return redirect('/dashboard'); 
});
Route::post('/logout', function () { 
    session()->forget('is_logged_in'); 
    return redirect('/'); 
});

Route::get('/dashboard', function () { 
    if (!session('is_logged_in')) return redirect('/login');
    return view('dashboard'); 
});