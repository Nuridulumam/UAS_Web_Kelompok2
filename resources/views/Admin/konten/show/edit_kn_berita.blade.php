@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-berita" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Edit Berita</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Edit Berita</h5>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="/admin/konten-berita/{{$Berita->id}}" enctype="multipart/form-data" class="row g-3">
                        @method('patch')
                        @csrf
                        <form>
                          <div class="form-group col-md-6">
                            <label for="inputJudul">Judul Berita</label>
                            <input type="text" class="form-control" id="inputJudul" name="judul_berita" value="{{$Berita->judul_berita}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputTanggal">Tanggal Berita</label>
                            <input type="text" class="form-control" id="inputTanggal" name="tanggal_berita" value="{{$Berita->tanggal_berita}}">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputKategori">Admin</label>
                            <select id="inputKategori" class="form-control" name="id_admin">
                              @foreach ($Admin as $a )
                              <option id="kategori" value="{{$a->id}}">
                                {{$a->nama_lengkap}}
                              </option>
                              @endforeach
                            </select>
                          </div>
                        <div class="form-group col-md-12">
                          <label for="InputIsi">Isi Berita</label>
                          <input type="text" class="form-control" id="InputIsi"  name="isi_berita" value="{{$Berita->isi_berita}}">
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
                          <select id="inputKategori" class="form-control" name="id_kategori_berita">
                            @foreach ($KategoriBerita as $k )
                            <option id="kategori" value="{{$k->id}}">
                              {{$k->kategori_berita}}
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
