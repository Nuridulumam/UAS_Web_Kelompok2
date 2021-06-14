@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-newspaper"></i> Konten Prestasi</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Konten Prestasi</h6>
                        <div class="card-tools">
                            <a href="/admin/konten-prestasi/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Konten Prestasi</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Prestasi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Upload By</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Prestasi as $no => $prestasi)
                            <tr>
                                <th scope="row">{{++$no}}</th>
                                <td>{{$prestasi->judul_prestasi}}</td>
                                <td>{{$prestasi->tanggal_prestasi}}</td>
                                <td>
                                    @foreach ($prestasi->adminprestasi as $ap)
                                    {{$ap->nama_lengkap}}
                                    @endforeach
                                </td>
                                <td>{{$prestasi->deskripsi}}</td>
                                <td>
                                    @foreach ($prestasi->katprestasi as $kp)
                                    {{$kp->kategori_prestasi}}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/admin/konten-prestasi/{{ $prestasi->id }}"><div class="badge badge-warning"><i class="fas fa-eye"></i> Detail</div></a>
                                    <form action="/admin/konten-prestasi/{{$prestasi->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                       <button type="submit" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
