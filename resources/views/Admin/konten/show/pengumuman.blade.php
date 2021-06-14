@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-pengumuman" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Pengumuman</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/konten-pengumuman/edit/{{$Pengumuman->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Pengumuman</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <div class="card shadow-sm"">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><small>Judul Pengumuman:</small><br>{{$Pengumuman->judul_pengumuman}}</li>
                                    <li class="list-group-item"><small>Tanggal Pengumuman:</small><br>{{$Pengumuman->tanggal_pengumuman}}</li>
                                    <li class="list-group-item"><small>Upload By</small><br>@foreach ($Pengumuman->admin as $a)
                                      {{$a->nama_lengkap}}  
                                    @endforeach</li>
                                    <li class="list-group-item"><small>Isi Pengumuman</small><br>{{$Pengumuman->isi_pengumuman}}</li>
                                    <li class="list-group-item"><small>Kategori</small><br>{{$Pengumuman->kategori}}</li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection