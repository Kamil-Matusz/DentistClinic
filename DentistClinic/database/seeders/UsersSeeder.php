<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Admin','email' => 'admin@admin.com','role' => 'admin','phoneNumber' => '+48123213456','password'=>Hash::make("admin123!")],
            ['name' => 'Konradix','email' => 'konradbieniasz@dentist.com','role' => 'user','phoneNumber' => '+48123213422','password'=>Hash::make("Password123!")],
            ['name' => 'PawełGaweł','email' => 'pawełgaweł@dentist.com','role' => 'user','phoneNumber' => '+48987654321','password'=>Hash::make("Password123!")],
            ['name' => 'Agna','email' => 'agnieszkajaros@dentist.com','role' => 'user','phoneNumber' => '+48123123456','password'=>Hash::make("Password123!")]
           ];
           User::insert($data);
    }
}
