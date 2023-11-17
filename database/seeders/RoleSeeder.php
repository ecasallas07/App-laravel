<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::create([
        //     'id' => 1,
        //     'name'=> 'admin',
        // ]);
        // Role::create([
        //     'id' => 2,
        //     'name'=> 'staff',
        // ]);
        // Role::create([
        //     'id' => 3,
        //     'name'=> 'guest',
        // ]);
        // Role::create([
        //     'id' => 4,
        //     'name'=> 'user',
        // ]);

        //IUnsetion a the relational

        DB::table('role_user')->insert([
            'role_id'=> 1 ,
            'role_user'  => 1,
            'add_by' => 'Juanjo'
        ]);
        DB::table('role_user')->insert([
            'role_id'=> 1 ,
            'role_user'  => 2,
            'add_by' => 'Andres'
        ]);
        DB::table('role_user')->insert([
            'role_id'=> 2 ,
            'role_user' => 1,
            'add_by' => 'Martha'
        ]);
        DB::table('role_user')->insert([
            'role_id'=> 3 ,
            'role_user'  => 2,
            'add_by' => 'Juanjo'
        ]);
        DB::table('role_user')->insert([
            'role_id'=> 4 ,
            'role_user'  => 3,
            'add_by' => 'Juanjo'
        ]);
    }
}
