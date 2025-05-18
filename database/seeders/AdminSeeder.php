<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSignup;
use Illuminate\Support\Facades\Crypt;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        AdminSignup::create([
            'name' => 'Super Admin',
            'phone' => '1234567890',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Crypt::encrypt('admin123'),
            'reference_code' => 'ADMIN'
        ]);
    }
}
