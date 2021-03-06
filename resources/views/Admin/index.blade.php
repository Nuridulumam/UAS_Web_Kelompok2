@extends('Admin.layout.main')

@section('content')

<div class="container-fluid">
    <h2 class="h2 ">Selamat Datang! Muhammad Nuridul Umam</h2>
    <div class="row">
        <div class="col-8">
            <div class="mt-2 card shadow p-5">
                <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="{{asset('images/1623639225.png')}}" alt="foto-profile" class="img-fluid rounded-pill" width="170px">
                <a href="#" data-toggle="modal" data-target="#editFoto" class="btn btn-circle bg-light" style="margin: -50px 0 0 110px; position: relative; z-index: 1;"><i class="fas fa-edit "></i></a>
                <h6 class="h6 text-center"> ID: ADM512 </h6>
            </div>
            <div class="col-1"></div>
            <div class="col-md-7">
                <form method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="inputnama" value="Muhammad Nuridul Umam" disabled>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="nuridulumam" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="m.nuridulumam.nu@gmail.com" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomorWa">Nomor Whatsapp</label>
                        <input type="text" name="wa" class="form-control" id="wa" value="081234545678" disabled>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="level" placeholder="Superadmin" disabled>
                    </div>
                    <!-- <button type="submit" name="submit" class="btn btn-info">Edit Profile</button> -->
                    {{-- <button type="submit" name="submit" class="btn btn-primary">Simpan Profile</button> --}}
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="calendar-container"></div>
        </div>
    </div>
</div>
@endsection
