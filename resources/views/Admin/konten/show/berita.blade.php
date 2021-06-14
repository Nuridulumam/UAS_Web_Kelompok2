@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-berita" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Berita</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/konten-berita/edit/{{$Berita->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Berita</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <div class="card shadow-sm"">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{asset($Berita->image)}}" class="img-fluid" alt="gambar">
                                    </li>
                                    <li class="list-group-item"><small>Judul Berita:</small><br>{{$Berita->judul_berita}}</li>
                                    <li class="list-group-item"><small>Tanggal Berita:</small><br>{{$Berita->tanggal_berita}}</li>
                                    <li class="list-group-item"><small>Upload By</small><br>
                                        @foreach ( $Berita->admin as $a )
                                        {{$a->nama_lengkap}}
                                        @endforeach
                                    </li>
                                    <li class="list-group-item"><small>Isi Berita</small><br>{{$Berita->isi_berita}}</li>
                                    <li class="list-group-item"><small>Kategori</small><br>
                                        @foreach ( $Berita->kategoriberita as $k)
                                            {{$k->kategori_berita}}
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