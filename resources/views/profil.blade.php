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
              Profil Prodi Teknologi Informasi
             </h1>
             <p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light fs-5">
                        <li class="breadcrumb-item" aria-current="page"><i class="fas fa-home"></i></li>
                        <li class="breadcrumb-item" aria-current="page">Profil </li>
                    </ol>
                </nav>
             </p>
          </div>
      </div>
</div>

<div class="container" style="padding-bottom: 50px">
    <div class="navig-head" style="padding: 30px 0 50px 0">
        <div class="col-lg-12">
            <div class="navig-head">
                <nav class="nav sticky-top shadow nav-pills nav-fill rounded-pill" style="background-color:#425B6C;">
                    <a class="flex-sm-fill text-sm-center nav-link text-dark active bg-white rounded-pill" href="#tentang-prodi">Tentang</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#visi-misi">Visi Misi</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#tujuan">Tujuan</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link text-white" href="#magang">Struktur Organisasi</a> --}}
                </nav>
            </div>
        </div>
      </div>
    <section id="profil" style="padding: 10px 0">
        <div class="title ps-3 pb-3">
            <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Profil</h1>
        </div>
        <div class="desc">
            <div class="row ps-5">
                <div class="col-md-4">
                    <div class="card">
                       <img src="{{asset('img/achievments_bg.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                </div>
                <div class="col-md-7 pt-3">
                    <p class="text-dark fs-5 fw-normal" style="text-align: justify">
                        Pendidikan vokasi merupakan pendidikan yang mengarahkan mahasiswa untuk mengembangkan keahlian terapan, beradaptasi pada bidang pekerjaan tertentu dan dapat menciptakan peluang kerja Pendidikan vokasi menganut sistem terbuka (multi-entry-exit system) dan multimakna (berorientasi pada pembudayaan, pemberdayaan, pembentukan watak, dan kepribadian, serta berbagai kecakapan hidup life skill. Pendidikan vokasi berorientasi pada kecakapan kerja sesuai dengan perkembangan ilmu pengetahuan dan teknologi terapan serta sesuai dengan tuntutan kebutuhan lapangan kerja. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" style="padding: 20px 0">
        <div class="title ps-3 pb-3">
            <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Visi</h1>
        </div>
        <div class="desc">
            <div class="row ps-5">
                <div class="col-md-12">
                    <p class="text-dark fs-5 fw-normal" style="text-align: justify">
                        Menjadi pelaksana pendidikan vokasi di bidang keahlian Informasi agar mahasiswa dapat mengembangkan potensi dirinya meraih keahlian dan kompetensi yang mampu bersaing di tingkat regional maupun nasional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" style="padding: 20px 0">
        <div class="title ps-3 pb-3">
            <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Misi</h1>
        </div>
        <div class="desc">
            <div class="row ps-5">
                <div class="col-md-12">
                    <ol class="text-dark fs-5 fw-normal" style="text-align: justify">
                        <li>Melaksanakan pendidikan,pelatihan, dan menumbuh - kembangkan kepercayaan diri peserta didik, sehingga mencapai keahlian dan kompetensi dalam bidang Teknologi Informasi.</li>
                        <li>Mengahasilkan tenaga Teknologi Informasi yang profesional, terampil, kreatif serta mempunyai jiwa kewirausahaan berbasis teknologi.</li>
                        <li>Melakukan pendampingan, tutorial, pembimbingan dan konsultasi di bidang Teknologi Informasi dan menfasilitasi ketersediaan tenaga kerja terampil bagi industri dalam maupun luar negri.</li>
                        <li> Memberikan peluang yang sebesar-besarnya untuk mengikuti pelatihan, pemagangan dan on the job training di dalam maupun luar negri agar peserta didik mempunyai daya saing dalam bidang Teknologi Informasi yang siap pakai di dunia industri maupun masyarakat pada umumnya.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="tujuan" style="padding: 20px 0">
        <div class="title ps-3 pb-3">
            <h1 class="h1 text-dark border-start border-5 border-warning ps-2">Tujuan</h1>
        </div>
        <div class="desc">
            <div class="row ps-5">
                <div class="col-md-12">
                    <ol class="text-dark fs-5 fw-normal" style="text-align: justify">
                        <li>Menyelenggarakan pendidikan dan pelatihan sehingga menghasilkan lulusan Ahli Madya yang terampil bekerja dan mampu mengembangkan diri di dalam bidang ilmu Teknologi Informasi guna memenuhi kebutuhan pembangunan nasional dan membekali mahasiswa dengan kompetensi khusus (core competency) bidang Teknologi Informasi.</li>
                        <li>MMemiliki integritas dan moral sesuai dengan norma-norma dan etika baik di dunia maya maupun dunia nyata sehingga menjadi insan cerdas, kreatif, inovatif dan kompetitif serta percaya diri untuk berperan aktif dalam menjawab tantangan dan kebutuhan dunia industri dan masyarakat;</li>
                        <li> Memiliki kemampuan, kecerdasan, keterampilan peserta didik dalam memanfaatkan ilmu pengetahuan, teknologi dan seni di bidang Teknologi Informasi sehingga mampu mengelola suatu proyek pembangunan teknologi komputer.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection