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
    <div class="container">
      <div class="text-jumbotron" style="padding-top: 100px; height: 570px">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h1 class="h1 text-light">
              Transformation Journey Step Future Professionals
             </h1>
             <p class="h5 mt-4 text-white">
              Lear how our transformative education and multidisciplinary research <br> have nurtured effective global leaders, impact society
             </p>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5 pl-5">
            <img src="{{ asset('img/asAS.jpg')}}" width="600px" height="700px" class="img-fluid img-thumbnail">
          </div>
        </div>
      </div>
      <div class="navig-head" style="height: 500px">
        <div class="col-lg-12">
            <div class="navig-head">
                <nav class="nav shadow nav-pills nav-fill rounded-pill" style="background-color:#425B6C;">
                    <a class="flex-sm-fill text-sm-center nav-link text-dark active bg-white rounded-pill" href="#tentang-prodi">Tentang</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#bidang-minat">Bidang Minat</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#pengumuman">Pengumuman</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#magang">Magang</a>
                    <a class="flex-sm-fill text-sm-center nav-link text-white" href="#faq">FAQs</a>
                </nav>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    {{--  --}}
    <section id="tentang prodi">
      <div class="tentang-ti">
        <div class="row justify-content-center">
          <div class="col-lg-12" style="margin-top: -350px">
            <div class="desc-prodi" style="background-color: #425B6C;">
              <div class="title pt-5">
                  <div class="col-lg-6 mx-auto">
                    <h3 class="h3 text-white border-start border-5 border-warning ps-2">Program Studi Teknologi Informasi</h3>
                  </div>
              </div>
              <div class="description mx-auto" style="padding: 88px 70px">
                <p class="text-white text-center" style="font-weight: 500; font-size: 18px">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat provident aspernatur voluptatum deserunt molestias, libero suscipit, beatae asperiores aliquam, a quasi earum excepturi. Iste maiores nesciunt hic. Nesciunt officia non hic vero officiis accusantium a laboriosam blanditiis placeat eveniet consequatur modi iusto consectetur natus amet, quo quis laudantium nam saepe voluptates dolore beatae sunt assumenda cupiditate. Possimus perferendis rem est magnam inventore accusantium itaque doloremque a nam aliquam, voluptatum architecto provident aut quia laborum eos consequuntur dicta nihil pariatur corrupti.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{--  --}}

    {{-- bidang minat --}}
    <section id="bidang-minat">
      <div class="bidangminat-ti mt-5" style="height: 450px; padding-top: 20px">
        <div class="title-bidangminat pt-5">
          <div class="col-lg-3 mx-auto">
            <h2 class="h2 border-start border-5 border-warning ps-3">Bidang Minat</h2>
          </div>
        </div>
        <div class="row justify-content-center pt-5">
          <div class="col-sm-3">
            <div class="tik" style="background-color: #425B6C">
              <div class="head-img text-center pt-5">
                <img src="{{ asset('img/Code File.png') }}" class="img-fluid" alt="ti">
              </div>
              <div class="desc-ti p-4">
                <h6 class="h6 text-center text-white">
                  Teknologi Informasi dan Komputer
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sistem-informasi" style="background-color: #425B6C">
              <div class="head-img text-center pt-5">
                <img src="{{ asset('img/Connect.png') }}" class="img-fluid" alt="ti">
              </div>
              <div class="desc-si p-4">
                <h6 class="h6 text-center text-white">
                  Sistem Informasi
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="bde" style="background-color: #425B6C">
              <div class="head-img text-center pt-5">
                <img src="{{ asset('img/Increase.png') }}" class="img-fluid" alt="ti">
              </div>
              <div class="desc-bde p-4">
                <h6 class="h6 text-center text-white">
                  Bussiness Digital dan E-commerce
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{--  --}}

    {{--  --}}
    <section id="pengumuman">
      <div class="pengumuman-ti mt-5" style="height: 450px">
        <div class="title-bidangminat pt-5 mx-auto" style="width: 300px">
          <h2 class="h2 border-start border-5 border-warning ps-3">Pengumuman</h2>
        </div>
          <div class="row justify-content-center pt-5">
            <div class="col-10">
              <div class="card-group">
                <div class="card shadow">
                  <div class="card-body">
                    <h5 class="card-title">Pengumuman Pendaftaran Wisuda Angkatan 2020</h5>
                    <div class="row">
                      <div class="col-sm-6">
                        <img src="{{asset('img/icon/Vector.png')}}" alt="date" class="img-fluid"><span class="text-warning ps-2">3 Mei, 2021</span> <br>
                        <img src="{{asset('img/icon/Outline.png')}}" alt="place" class="img-fluid"><span class="text-info ps-1">Gd Biro Vokasi</span>
                    </div>
                    <div class="col-sm-6">
                      <img src="{{asset('img/icon/user.png')}}" alt="by" class="img-fluid"><span class="text-secondary ps-2">Biro Vokasi</span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Jadwal Kuliah Daring Selama Bulan Ramadhan 1442 H</h5>
                    <div class="row">
                      <div class="col-sm-6">
                        <img src="{{asset('img/icon/Vector.png')}}" alt="date" class="img-fluid"><span class="text-warning ps-2">3 Mei, 2021</span> <br>
                        <img src="{{asset('img/icon/Outline.png')}}" alt="place" class="img-fluid"><span class="text-info ps-1">Gd Biro Vokasi</span>
                    </div>
                    <div class="col-sm-6">
                      <img src="{{asset('img/icon/user.png')}}" alt="by" class="img-fluid"><span class="text-secondary ps-2">Biro Vokasi</span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Beasiswa PT. Wijaya Karya (Persero) Tbk</h5>
                    <div class="row">
                      <div class="col-sm-6">
                        <img src="{{asset('img/icon/Vector.png')}}" alt="date" class="img-fluid"><span class="text-warning ps-2">3 Mei, 2021</span> <br>
                        <img src="{{asset('img/icon/Outline.png')}}" alt="place" class="img-fluid"><span class="text-info ps-1">Gd Biro Vokasi</span>
                    </div>
                    <div class="col-sm-6">
                      <img src="{{asset('img/icon/user.png')}}" alt="by" class="img-fluid"><span class="text-secondary ps-2">Biro Vokasi</span>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{--  --}}

    {{--  --}}
    <section id="magang">
      <div class="magang-ti " style="height: 450px;">
        <div class="title-bidangminat pt-5 mx-auto" style="width: 300px">
          <h2 class="h2 border-start border-5 border-warning ps-3">Magang</h2>
        </div>
        <div class="row justify-content-center" style="margin-top: 70px">
          <div class="col-3 text-center p-4 bg-light">
            <img src="{{asset('img/magang/IMDP.png')}}" class="img-fluid" alt="imdp">
          </div>
          <div class="col-3 text-center p-4 bg-light">
           <img src="{{asset('img/magang/Bisa.ai.png')}}" class="img-fluid" alt="bisa.ai">
          </div>
          <div class="col-3 text-center p-4 bg-light">
            <img src="{{asset('img/magang/cmlabs.png')}}" class="img-fluid" alt="cmlabs">
          </div>
        </div>
      </div>
    </section>
    {{--  --}}

    {{--  --}}
    <section id="faq">
      <div class="faq-ti " style="height: 450px;">
        <div class="title-bidangminat pt-5 mx-auto" style="width: 300px">
          <h2 class="h2 border-start border-5 border-warning ps-3">Faqs</h2>
        </div>
        <div class="row justify-content-center" style="margin-top: 70px">
          <div class="col-md-10">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{--  --}}
@endsection
