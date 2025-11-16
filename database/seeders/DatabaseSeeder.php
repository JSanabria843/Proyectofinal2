<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Quitamos cualquier factory que venía por defecto
        // y solo llamamos a nuestro seeder personalizado.
        
        $this->call([
            UserSeeder::class,
        ]);
    }
}
