@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/pengaturan-admin" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Admin</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Admin</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/pengaturan-admin" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="inputNama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="inputNamaDP" name="nama_lengkap" value="{{ old('nama_lengkap')}}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputUsername" class="form-label">Username</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername" name="username" value="{{ old('username')}}">
                              @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputEmail" class="form-label">Email</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" value="{{ old('email')}}">
                              @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Input foto" class="form-label">Upload Foto</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="validatedCustomFile" name="image">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" value="{{ old('password')}}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputidAdmin">ID Admin</label>
                                <input type="text" class="form-control @error('id_admin') is-invalid @enderror" id="inputidAdmin" name="id_admin" value="{{ old('id_admin')}}">
                                @error('id_admin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputRole">Role</label>
                                <select id="inputRole" name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option selected>Admin</option>
                                    <option>Superadmin</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection