<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index () {
        $rak = Rak::all();
        return view ('rak.data-rak', compact('rak'));
    }
}
