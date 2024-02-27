<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vuelos_asientos extends Controller
{
    public function index(){
        return view("vueloAsientos");
    }
}
