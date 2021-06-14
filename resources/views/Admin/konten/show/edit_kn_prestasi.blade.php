@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-prestasi" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Prestasi</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Prestasi</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/konten-prestasi/{{$Prestasi->id}}" class="row g-3">
                          @method('patch')
                            @csrf
                            <div class="form-group col-md-6">
                              <label for="inputJudul">Judul Prestasi</label>
                              <input type="text" class="form-control" id="inputJudul" name="judul_prestasi">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputTanggal">Tanggal Prestasi</label>
                              <input type="text" class="form-control" id="inputTanggal" name="tanggal_prestasi">
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
                            <label for="InputIsi">Isi Prestasi</label>
                            <input type="text" class="form-control" id="InputIsi"" name="deskripsi">
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
                            <select id="inputKategori" class="form-control" name="id_kategori_prestasi">
                              @foreach ($KategoriPrestasi as $kp )
                              <option id="kategori" value="{{$kp->id}}">
                                {{$kp->kategori_Prestasi}}
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
