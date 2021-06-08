@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Pengaturan Admin</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Admin</h6>
                        <div class="card-tools">
                            <a href="/admin/pengaturan-admin/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Admin</a>
                        </div>
                    </div>
                    <div class="table-responsive-md card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                        @endif
                        <table id="dataTable" class="table table-hover">
                        <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col" width="120px">Action</th>
                                </tr>
                        </thead>
                        @foreach ($Admin as $no => $admin)
                        <tbody>
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $admin->nama_lengkap}}</td>
                                <td>{{ $admin->email}}</td>
                                <td>{{ $admin->role}}</td>
                                <td>
                                    <a href="/admin/pengaturan-admin/{{ $admin->id }}"><div class="badge badge-warning"><i class="fas fa-eye"></i> Detail</div></a>
                                    <form action="/admin/pengaturan-admin/{{$admin->id}}" method="post" class="d-inline">
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
