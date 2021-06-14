@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-newspaper"></i> Konten Pengumuman</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Konten Pengumuman</h6>
                        <div class="card-tools">
                            <a href="/admin/konten-pengumuman/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Konten Pengumuman</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul Pengumuman</th>
                                    <th scope="col">Tanggal Pengumuman</th>
                                    <th scope="col">Upload By</th>
                                    <th scope="col">Isi Pengumuman</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col" width="120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($Pengumuman as $no => $pengumuman)
                            <tr>
                                <th scope="row">{{++$no}}</th>
                                <td>{{$pengumuman->judul_pengumuman}}</td>
                                <td>{{$pengumuman->tanggal_pengumuman}}</td>
                                <td>
                                    @foreach ($pengumuman->admin as $a)
                                    {{$a->nama_lengkap}}
                                    @endforeach
                                </td>
                                <td>{{$pengumuman->isi_pengumuman}}</td>
                                <td>{{$pengumuman->kategori}}
                                </td>
                                <td>
                                    <a href="/admin/konten-pengumuman/{{ $pengumuman->id }}"><div class="badge badge-warning"><i class="fas fa-eye"></i> Detail</div></a>
                                    <form action="/admin/konten-pengumuman/{{$pengumuman->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                       <button type="submit" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
