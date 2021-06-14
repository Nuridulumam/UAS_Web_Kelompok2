@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <a href="/admin/kategori-magang"" class="btn btn-sm btn-info float-right "><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="h2 text-dark"><i class="fas fa-user-plus"></i> Edit Kategori Magang</h2>
                </div>
                <div class="card p-2">
                    <div class="card-header">
                        <h5 class="h6 pt-2 font-weight-bold text-dark"><i class="fa fa-list"></i> Form Edit Kategori Magang</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/kategori-magang/{{$KategoriMagang->id}}" class="row g-3">
                            @method('put')
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="inputNama" class="form-label">Kategori Magang</label>
                                <input type="text" class="form-control @error('kategori_magang') is-invalid @enderror" id="inputkategori_magang" name="kategori_magang" value="{{$KategoriMagang->kategori_magang}}">
                                @error('kategori_magang')
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
