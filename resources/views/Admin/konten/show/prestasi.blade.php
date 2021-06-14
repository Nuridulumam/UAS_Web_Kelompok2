@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-prestasi" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Prestasi</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/konten-prestasi/edit/{{$Prestasi->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Prestasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <div class="card shadow-sm"">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><small>Judul Prestasi:</small><br>{{$Prestasi->judul_prestasi}}</li>
                                    <li class="list-group-item"><small>Tanggal Prestasi:</small><br>{{$Prestasi->tanggal_prestasi}}</li>
                                    <li class="list-group-item"><small>Upload By</small><br>
                                        @foreach ($Prestasi->admin as $a)
                                        {{$a->nama_lengkap}}
                                        @endforeach
                                    </li>
                                    <li class="list-group-item"><small>Deskripsi</small><br>{{$Prestasi->deskripsi}}</li>
                                    <li class="list-group-item"><small>Kategori</small><br>
                                        @foreach ($Prestasi->kategoriprestasi as $kp) 
                                        {{$kp->kategori_prestasi}}
                                        @endforeach
                                    </li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection