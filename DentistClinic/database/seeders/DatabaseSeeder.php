<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dentist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            DentistSeeder::class,
            ServiceTypeSeeder::class,
            ServicesSeeder::class,
        ]);
    }
}
