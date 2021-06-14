@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/pengaturan-admin" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-users"></i>  Pengaturan Admin</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <a href="/admin/pengaturan-admin/edit/{{$Admin->id}}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Detail Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-4">
                            <div class="card shadow-sm"">
                                <div class="image-admin text-center">
                                    <img src="{{asset($Admin->image)}}" class="img-fluid rounded-pill p-2" width="224px" alt="">
                                    {{-- <img src="{{$Admin->image}}" class="img-fluid" width="224px" alt=""> --}}
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$Admin->nama_lengkap}}</h5>
                                    <small>ID : {{$Admin->id_admin}}</small>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$Admin->nip_admin}}</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><small>email:</small><br>{{$Admin->email}}</li>
                                    <li class="list-group-item"><small>role:</small><br>{{$Admin->role}}</li>
                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
