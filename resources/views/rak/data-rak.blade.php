@extends ('layouts.rak')

@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Rak</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Rak</th>
                                            <th>Lokasi Rak</th>
                                            <th>Buku</th>
                                        </tr>
                                    </thead>
                                    @foreach ($rak as $r)
                                    <tbody>
                                        <tr>
                                            <td>{{ $r -> nama_rak }}</td>
                                            <td>{{ $r -> lokasi_rak }}</td>
                                            <td>{{ $r-> buku_id }}</td>
                                        
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection