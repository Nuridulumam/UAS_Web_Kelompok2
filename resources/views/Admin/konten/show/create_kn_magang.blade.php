@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-magang" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Magang</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Magang</h5>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="/admin/konten-magang" enctype="multipart/form-data" class="row g-3">
                        @csrf
                            <div class="form-group col-md-6">
                              <label for="inputJudul">Judul Magang</label>
                              <input type="text" class="form-control @error('juduL_magang') is-invalid @enderror" id="inputJudul" name="judul_magang">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputTanggal">Tanggal Magang</label>
                              <input type="text" class="form-control @error('tanggal-magang') is-invalid @enderror" id="inputTanggal" name="tanggal_magang">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputKategori">Admin</label>
                              <select id="inputKategori" class="form-control @error('id-admin') is-invalid @enderror" name="id_admin">
                                @foreach ($Admin as $a )
                                <option id="kategori" value="{{$a->id}}">
                                  {{$a->nama_lengkap}}
                                </option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="InputIsi">Deskripsi</label>
                              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="InputIsi">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="Input foto" class="form-label">Upload Foto</label>
                              <div class="custom-file mb-3">
                                  <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                              </div>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputKategori">Kategori</label>
                              <select id="inputKategori" class="form-control @error('id_kategori_magang') is-invalid @enderror" name="id_kategori_magang">
                                @foreach ($KategoriMagang as $km)
                                <option id="kategori" value="{{$km->id}}">
                                  {{$km->kategori_magang}}
                                </option>
                                @endforeach
                              </select>
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
