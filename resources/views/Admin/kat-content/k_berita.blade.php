@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-newspaper"></i> Kategori Berita</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Kategori Berita</h6>
                        <div class="card-tools">
                            <a href="/admin/kategori-berita/create" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah kategori Berita</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kategori Berita</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($Kategoriberita as $Kategoriberita)
                            <tr>
                                <th>{{$i}}</th>
                                <td>{{$Kategoriberita->kategori_berita}}</td>
                                <td>
                                    <a href="/admin/kategori-berita/edit/{{$Kategoriberita->id}}"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                    <form action="/admin/kategori-berita/{{$Kategoriberita->id}}" method="post" class="d-inline">
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
