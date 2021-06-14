@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-briefcase"></i> Konten Magang</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Konten Magang</h6>
                        <div class="card-tools">
                            <a href="/admin/konten-magang/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Konten Magang</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Magang</th>
                                <th scope="col">Tanggal Magang</th>
                                <th scope="col">Upload By</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Magang as $no => $Magang)
                            <tr>
                                <th scope="row">{{++$no}}</th>
                                <td>{{$Magang->judul_magang}}</td>
                                <td>{{$Magang->tanggal_magang}}</td>
                                <td>
                                    @foreach ($Magang->admin as $am)
                                    {{$am->nama_lengkap}}
                                    @endforeach
                                </td>
                                <td>{{$Magang->deskripsi}}</td>
                                <td>
                                    @foreach ($Magang->kategoriMagang as $km)
                                        {{$km->kategori_magang}}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/admin/konten-magang/{{ $Magang->id }}"><div class="badge badge-warning"><i class="fas fa-eye"></i> Detail</div></a>
                                    <form action="/admin/konten-magang/{{$Magang->id}}" method="post" class="d-inline">
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
