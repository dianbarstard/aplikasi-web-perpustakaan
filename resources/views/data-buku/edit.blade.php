@extends ('layouts.buku')

@section ('content')
<div class="container-fluid">
<form action="{{ url ('/update', $books->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1">Kode Buku</label>
        <input class="form-control" id="kode_buku" type="text" name="kode_buku" value="{{$books->kode_buku}}" placeholder="Kode Buku">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Judul</label>
    
        <input class="form-control" id="judul" type="text" name="judul" value="{{$books->judul}}" placeholder="Judul Buku">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">penerbit</label>
    
        <input class="form-control" id="penerbit" type="text" name="penerbit" value="{{$books->penerbit}}" placeholder="Penerbit">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Penulis</label>
    
        <input class="form-control" id="penulis" type="text" name="penulis" value="{{$books->penulis}}" placeholder="Penulis">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Tahun Terbit</label>
    
        <input class="form-control" id="tahun" type="text" name="tahun" value="{{$books->tahun}}" placeholder="Tahun Terbit">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Edit Buku</button>
        <a class="btn btn-danger" href="{{ ('/buku') }}"> Batal</a>
    </div>   
</form>
</div>

@endsection