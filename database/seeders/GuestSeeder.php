<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Restiana',
            'institutions_id' => 1,
            'from' => 'PT BIM',
            'phonenumber' => '08123456789',
            'email' => 'restiana@mail.com',
            'note' => 'Test'
        ]);
    }
}
