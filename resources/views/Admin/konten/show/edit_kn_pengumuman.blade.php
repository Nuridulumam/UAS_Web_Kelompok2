@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-pengumuman" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Pengumuman</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Pengumuman</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/konten-pengumuman/{{$Pengumuman->id}}" class="row g-3">
                          @method('patch')
                            @csrf
                            <div class="form-group col-md-6">
                              <label for="inputJudul">Judul Pengumuman</label>
                              <input type="text" class="form-control" id="inputJudul" value="{{$Pengumuman->judul_pengumuman}}" name="judul_pengumuman">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputTanggal">Tanggal Pengumuman</label>
                              <input type="text" class="form-control" id="inputTanggal" value="{{$Pengumuman->tanggal_pengumuman}}" name="tanggal_pengumuman">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputKategori">Admin</label>
                              <select id="inputKategori" class="form-control" name="id_admin">
                                @foreach ($Admin as $a )
                                <option value="{{$a->id}}" id="kategori">
                                  {{$a->nama_lengkap}}
                                </option>
                                @endforeach
                              </select>
                            </div>
                          <div class="form-group col-md-12">
                            <label for="InputIsi">Isi Pengumuman</label>
                            <input type="text" class="form-control" id="InputIsi" value="{{$Pengumuman->isi_pengumuman}}" name="isi_pengumuman">
                          </div>
                            {{-- <div class="form-group col-md-12">
                              <label for="Input foto" class="form-label">Upload Foto</label>
                              <div class="custom-file mb-3">
                                  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                              </div>
                          </div> --}}
                          <div class="form-group col-md-12">
                            <label for="inputKategori">Kategori</label>
                            <select id="inputKategori" class="form-control" value="{{$Pengumuman->kategori}}" name="kategori">
                              <option id="kategori">Penting</option>
                              <option id="kategori">Sangat Penting</option>
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
