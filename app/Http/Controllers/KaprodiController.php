<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    function index(){
        return view('kaprodi');
    }

    function dosen(){
        return view("dosen");
    }

    function mahasiswa(){
        return view("mahasiswa");
    }
}
