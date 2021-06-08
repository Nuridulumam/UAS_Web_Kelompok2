@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Pengaturan Admin</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Admin</h6>
                        <div class="card-tools">
                            <div class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Admin</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Role</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Muhammad Nuridul Umam</td>
                                <td>Superadmin</td>
                                <td>
                                   <a href="#"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                   <a href="#"><div class="badge badge-danger"><i class="fas fa-trash"></i> hapus</div></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
