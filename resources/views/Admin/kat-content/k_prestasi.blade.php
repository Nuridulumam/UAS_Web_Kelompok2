@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-medal"></i>  Kategori Prestasi</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Kategori Prestasi</h6>
                        <div class="card-tools">
                            <a href="/admin/kategori-prestasi/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah kategori Prestasi</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kategori Prestasi</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($KategoriPrestasi as $KategoriPrestasi)
                            <tr>
                                <th>{{$i}}</th>
                                <td>{{$KategoriPrestasi->kategori_prestasi}}</td>
                                <td>
                                   <a href="/admin/kategori-prestasi/edit/{{$KategoriPrestasi->id}}"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                   <form action="/admin/kategori-prestasi/{{$KategoriPrestasi->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
