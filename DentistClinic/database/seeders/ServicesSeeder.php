<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Childens Check-up','price' => 50.00,'description' => 'Childens Check-up','type_id' => 4],
            ['name' => 'Teeth whitening','price' => 150.00,'description' => 'teeth whitening','type_id' => 5],
            ['name' => 'Dental braces for a child','price' => 500.00,'description' => 'Dental braces for a child','type_id' => 2],
            ['name' => 'Dental braces for a adult','price' => 600.00,'description' => 'Dental braces for a adult','type_id' => 2],
            ['name' => 'Filling a cavity without tooth preparation','price' => 200.00,'description' => 'Filling a cavity without tooth preparation','type_id' => 3],
            ['name' => 'Surgical consultation','price' => 100.00,'description' => 'Surgical consultation','type_id' => 5],
            ['name' => 'Porcelain crown on implant','price' => 900.00,'description' => 'Porcelain crown on implant','type_id' => 2],
           ];
           Service::insert($data);
    }
}