@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-magang" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Magang</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/konten-magang/edit/{{$Magang->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Magang</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <div class="card shadow-sm"">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{asset($Magang->image)}}" class="img-fluid" alt="gambar">
                                    </li>
                                    <li class="list-group-item"><small>Judul Magang:</small><br>{{$Magang->judul_magang}}</li>
                                    <li class="list-group-item"><small>Tanggal Magang:</small><br>{{$Magang->tanggal_magang}}</li>
                                    <li class="list-group-item"><small>Upload By</small><br>
                                        @foreach ($Magang->admin as $am)
                                        {{$am->nama_lengkap}}
                                    @endforeach</li>
                                    <li class="list-group-item"><small>Deskripsi</small><br>{{$Magang->deskripsi}}</li>
                                    <li class="list-group-item"><small>Kategori</small><br>
                                        @foreach ($Magang->kategorimagang as $km)
                                        {{$km->kategori_magang}}
                                    @endforeach</li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection