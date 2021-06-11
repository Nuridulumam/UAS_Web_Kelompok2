@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="far fa-handshake"></i>  Kategori Magang</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Kategori Magang</h6>
                        <div class="card-tools">
                            <a href="/admin/kategori-magang/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah kategori Magang</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">kategori magang</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach($kategoriMagang as $kategoriMagang)
                                <tr>
                                    <th>{{$i}}</th>
                                    <td>{{$kategoriMagang->kategori_magang}}</td>
                                    <td>
                                        <a href="/admin/kategori-magang/edit/{{$kategoriMagang->id}}"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                        <form action="/admin/kategori-magang/{{$kategoriMagang->id}}" method="post" class="d-inline">
                                            @method('DELETE')
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
