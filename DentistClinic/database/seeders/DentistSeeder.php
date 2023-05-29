<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dentist;

class DentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['dentistName' => 'Konrad Bieniasz','userId' => 2],
            ['dentistName' => 'Paweł Gaweł','userId' => 3],
            ['dentistName' => 'Agnieszka Jaros','userId' => 4],
        ];
        Dentist::insert($data);
    }
}
