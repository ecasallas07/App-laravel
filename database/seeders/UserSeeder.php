<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Andres',
        //     'email'=> '123@example.com',
        //     'password'=> Hash::make('09434'),
        //     'address'=> 'Street',
        //     'telephone' => '238723'
        // ]);
        // User::create([
        //     'name' => 'Juan',
        //     'email'=> '789@example.com',
        //     'password'=> Hash::make('123123'),
        //     'address'=> 'Main',
        //     'telephone' => '238723'
        // ]);
        // User::create([
        //     'name' => 'Martin',
        //     'email'=> '12maria@example.com',
        //     'password'=> Hash::make('3434'),
        //     'address'=> '7 Street',
        //     'telephone' => '238723'
        // ]);
    }
}
