<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index (){
        $anggota = Anggota::all();
        return view ('anggota.data-anggota', compact('anggota'));
    }
}
