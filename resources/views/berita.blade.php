@extends('layout.main')
@section('container')
<div class="container-fluid" style="background-image:url('{{asset('img/image01.png')}}');  background-size: cover;">
    <div id="navbar">
        <div class="container pt-4">
            <nav class="navbar shadow navbar-expand-lg navbar-light bg-light" style="border-radius: 10px">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand ps-3" href="#"><img src="{{asset('img/logoprodi1.png')}}" alt="logo-prodi"></a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active pe-4" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item pe-4">
                            <a class="nav-link" href="{{url('/profil')}}">Profile</a>
                            </li>
                            <li class="nav-item pe-4">
                            <a class="nav-link" href="{{url('/berita')}}">Berita</a>
                            </li>
                            <li class="nav-item pe-4">
                            <a class="nav-link" href="{{url('/magang')}}">Magang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="text-jumbotron" style="padding: 100px 0 50px 0;">
        <div class="container">
          <h1 class="h1 text-light">
            Kumpulan Berita Vokasi UB
           </h1>
           <p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb text-light fs-5">
                      <li class="breadcrumb-item" aria-current="page"><i class="fas fa-home"></i></li>
                      <li class="breadcrumb-item" aria-current="page">Berita </li>
                  </ol>
              </nav>
           </p>
        </div>
    </div>
</div>

<div class="container" style="padding: 50px 0 100px 0">
    <div class="title ps-3 pb-5">
        <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Berita</h1>
    </div>
    <div class="row ps-4 row-cols-1 row-cols-md-4 g-5">
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/prestasi/prestasi1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-capitalize">Ini Prospek Kerja Lulusan Prodi Keuangan dan Perbankan</h5>
              <p class="card-text"><a href="#" class="btn btn-warning stretched-link">Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/prestasi/prestasi2.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-capitalize">Penerimaan Mahasiswa Baru Jalur Prestasi Jenjang Ahli Madya (D-III) Pendidikan Vokasi TA. 2021/2022</h5>
              <p class="card-text"><a href="#" class="btn btn-warning stretched-link">Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/prestasi/prestasi3.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-capitalize">Empat Mahasiswa Jurusan Perbankan Masuk Pegawai BRI Setelah Magang</h5>
              <p class="card-text"><a href="#" class="btn btn-warning stretched-link">Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/prestasi/prestasi4.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-capitalize">Mahasiswa Vokasi Raih Gold Medal di OCIIP WORLD IP FAIR NIGERIA 2021</h5>
              <p class="card-text"><a href="#" class="btn btn-warning stretched-link">Selengkapnya</a></p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection