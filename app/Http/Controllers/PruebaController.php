<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
// use Illuminate\Contracts\View\View;
use App\Models\Prueba;


class PruebaController extends Controller
{
    public function index():View
    {
        $prueba = Prueba::all();
        return view('prueba.faker',compact('prueba'));
    }
}
