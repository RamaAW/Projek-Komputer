<?php

namespace App\Http\Controllers;

use App\Komputer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data_komputer = Komputer::all();

        return view('main', compact('data_komputer'));
    }
}
