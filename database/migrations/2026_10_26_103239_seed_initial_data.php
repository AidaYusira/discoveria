<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Hanya isi data kalau tabel materials masih kosong
        if (DB::table('materials')->count() === 0) {
            Artisan::call('db:seed', ['--force' => true]);
        }
    }

    public function down(): void
    {
        //
    }
};