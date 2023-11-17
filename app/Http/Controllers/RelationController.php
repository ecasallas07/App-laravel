<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RelationController extends Controller
{
    public function index()
    {
        $user = User::find(3);
        return view('relation.index',compact('user'));
    }
}
