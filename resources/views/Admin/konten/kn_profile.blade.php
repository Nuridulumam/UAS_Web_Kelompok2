@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-newspaper"></i> Konten Profile</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Konten Profile</h6>
                        <div class="card-tools">
                            <a href="konten-profile/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Konten Profile</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tentang Prodi</th>
                                <th scope="col">Visi</th>
                                <th scope="col">Misi</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Profile as $no => $profile)
                            <tr>
                                <th scope="row">{{++$no}}</th>
                                <td>{{$profile->tentang_prodi}}</td>
                                <td>{{$profile->visi}}</td>
                                <td><code>{{$profile->misi}}</code></td>
                                <td><code>{{$profile->tujuan}}</code></td>
                                <td>
                                    <a href="/admin/konten-profile/{{ $profile->id }}"><div class="badge badge-warning"><i class="fas fa-eye"></i> Detail</div></a>
                                    <form action="/admin/konten-profile/{{$profile->id}}" method="post" class="d-inline">
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
