@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/kategori-berita" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Tambah Kategori Berita</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Tambah Kategori Berita</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/kategori-berita" class="row g-3">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="inputNama" class="form-label">Kategori Berita</label>
                                <input type="text" class="form-control @error('kategori_berita') is-invalid @enderror" id="inputkategori_berita" name="kategori_berita" value="{{ old('kategori_berita')}}">
                                @error('kategori_berita')
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
