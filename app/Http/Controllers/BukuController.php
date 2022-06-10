<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function home (){
        return view ('home');
    }

    public function buku () {
        return view ('buku');
    }

    public function kontak () {
        return view ('kontak');
    }
}
