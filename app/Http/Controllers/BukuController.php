<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function home (){
        return view ('home');
    }

    public function index () {
        $books = Buku::orderby('judul')->get();
        return view ('data-buku.index', compact('books'));
    }

    public function create () {
        return view ('data-buku.create');
    }

    public function post(Request $request) {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'tahun' => 'required'
        ]);

        Buku::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
        ]);

        return redirect('/buku')->with('pesan', 'Buku Berhasil Disimpan');
    }

    public function edit ($id) {
        $books = Buku::find($id);
        return view ('data-buku.edit', compact('books')); 
    }

    public function update (Request $request, $id) {
        $books = Buku::find($id);
        $books->kode_buku = $request->kode_buku;
        $books->judul = $request->judul;
        $books->penerbit = $request->penerbit;
        $books->penulis = $request->penulis;
        $books->tahun = $request->tahun;
        $books->save();
        return redirect('/buku')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id) {
        $books = Buku::find($id);
        $books->delete();
        return redirect('/buku')->with('pesan', 'Data Berhasil dihapus');
    }
}
