@extends ('layouts.buku')

@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a class="btn btn-primary" href="{{ url ('/create') }}"> Tambah Buku </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Penulis</th>
                                            <th>Tahun Terbit</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach ($books as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b -> kode_buku }}</td>
                                            <td>{{ $b -> judul }}</td>
                                            <td>{{ $b -> penerbit }}</td>
                                            <td>{{ $b -> penulis }}</td>
                                            <td>{{ $b -> tahun }}</td>
                                            <td>
                                                <a href="{{ url ('edit', $b->id) }}" class="btn btn-warning">Edit</a> |
                                                <a href="{{ url ('delete', $b->id) }}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection