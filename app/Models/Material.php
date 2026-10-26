<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'judul',
        'gambar',
        'konten',
        'quizzes',
    ];

    // Memberitahu Laravel agar kolom quizzes otomatis diubah jadi Array/JSON
    protected $casts = [
        'quizzes' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}