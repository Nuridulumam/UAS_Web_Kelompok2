@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-profile" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Profile</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/konten-profile/edit/{{$Profile->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <div class="card shadow-sm"">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><small>Tentang:</small><br>{{$Profile->tentang_prodi}}</li>
                                    <li class="list-group-item"><small>Visi:</small><br>{{$Profile->visi}}</li>
                                    <li class="list-group-item"><small>Misi</small><br>{{$Profile->misi}}</li>
                                    <li class="list-group-item"><small>Tujuan</small><br>{{$Profile->tujuan}}</li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection