<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil file seeder yang berisi data materi dan kategori
        $this->call([
            MaterialSeeder::class,
        ]);
    }
}