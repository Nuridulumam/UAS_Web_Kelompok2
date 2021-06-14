@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/konten-profile" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Konten Profile</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Konten Profile</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/konten-profile" class="row g-3">
                            @csrf
                              <div class="form-group col-md-12">
                                <label for="inputTentang">Tentang Prodi</label>
                                <textarea class="form-control  @error('tentang_prodi') is-invalid @enderror" id="inputTentang" name="tentang_prodi"></textarea>
                                @error('tentang_prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputVisi">Visi</label>
                                <textarea class="form-control  @error('visi') is-invalid @enderror" name="visi"></textarea>
                                @error('visi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <label for="InputMisi">Misi</label>
                                <textarea type="text" class="form-control  @error('misi') is-invalid @enderror" id="editor1" name="misi"></textarea>
                                @error('misi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputTuujuan">Tujuan</label>
                                <textarea type="text" class="form-control  @error('tujuan') is-invalid @enderror" id="editor2" name="tujuan"></textarea>
                                @error('tujuan')
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
    </div>
@endsection
