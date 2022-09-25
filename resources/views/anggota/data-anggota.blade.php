@extends ('layouts.anggota')

@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>No Telepon</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            
                                        </tr>
                                    </thead>
                                    @foreach ($anggota as $a)
                                    <tbody>
                                        <tr>
                                            <td>{{ $a -> kode_anggota }}</td>
                                            <td>{{ $a -> nama_anggota }}</td>
                                            <td>{{ $a -> jk_anggota }}</td>
                                            <td>{{ $a -> jurusan_anggota }}</td>
                                            <td>{{ $a -> no_telp }}</td>
                                            <td>{{ $a -> alamat }}</td>
                                            <td>{{ $a->user->email }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection