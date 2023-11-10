<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        //Eloquent
        $users = User::where('age',118)->get();

        //SQL raw
        $users = DB::select( DB::raw("SELECT * FROM users") );

        //table sql
        DB::table('users')->select('name');
        
        return view('user.index',compact('users'));
    }

    public function create()
    {

        //Forma de insertar datos 01 y 02
        DB::table('users')->insert(array('name' => 'Juand'));
        $user = new User();
        $user->name = 'John';
        $user->email = 'jhon@gmail.com';
        $user->password = Hash::make('6578');
        $user->age = 18;
        $user->address = '123 Main Street';
        $user->zip_code = 872333; 
        $user->save();


        // Forma de insertar dato 03
        User::create([
            "name" => "Alejandro",
            "email" => "jhon@gmail",
            "password" => Hash::make('1234'),
            "age" => 42,
            "address" => "123 Main Street",
            "zip_code" => 8700003
        ]);

        // redirigir al punto de raiz
        return redirect()->route('user.index');
    }
}
