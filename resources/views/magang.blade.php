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
            Pusat Informasi Magang
           </h1>
           <p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb text-light fs-5">
                      <li class="breadcrumb-item" aria-current="page"><i class="fas fa-home"></i></li>
                      <li class="breadcrumb-item" aria-current="page">Magang </li>
                  </ol>
              </nav>
           </p>
        </div>
    </div>
</div>

<div class="container" style="padding: 50px 0 100px 0">
    <div class="title ps-3 pb-5">
        <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Magang</h1>
    </div>
    <div class="row ps-4 row-cols-1 row-cols-md-4 g-5">
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/magang/cmlabs.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CMLAB.CO</h5>
              <p class="card-text">CMLABS adalah salah satu startup asal Jakarta yang bergerak dibidang Jasa SEO untuk Enterprise. Saat ini cmlabs beroperasi juga di kota Malang untuk menjangkau talenta-talenta brilian di  salah satu kota pendidikan di Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/magang/matsuya.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PT Masuya Distra </h5>
              <p class="card-text">We are leading marketing,k selling and distributor of foodservice and consumer product in Indonesia, and has a long, established history of coustumer statisfaction with competitive prices. quality, and coustumer service.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/magang/bisa.ai.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bisa.ai</h5>
              <p class="card-text">Program magang bidang ‘Kecerdasan Artifisial’  telah dirancang bagi  mahasiswa untuk belajar selama 1 semester hingga 2 semester di bisa.ai untuk pendaftaran bisa langsung menuju  link bit.ly/bisaai_kampus_merdeka</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('img/magang/IMDP.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">XL IoT</h5>
              <p class="card-text">XL adalah perusahaan seluler swasta pertama di Indonesia saat ini XL juga merupakan perusahaan telekomunikasi terbesar di Asia dan publik. XL terus  berinovasi dan menjadi operator terbaik  di Indonesia.</p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection