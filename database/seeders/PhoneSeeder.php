<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;
class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix'=> 57,
            'phone_number'=> 3123520912,
            'user_id' => 3
        ]);
        Phone::create([
            'prefix'=> 33,
            'phone_number'=> 3124120912,
            'user_id' => 3
        ]);
    }
}
