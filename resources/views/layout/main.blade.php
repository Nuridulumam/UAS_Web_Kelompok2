<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    <style>
      *{
        font-family: 'Roboto', sans-serif;
      }
    </style>
    <title>Prodi Teknologi Informasi</title>
  </head>
  <body>

    @yield('container')

    <section id="footer">
      <footer>
       <div class="container">
         <div class="row justify-content-center">
           <div class="brand-logo col-md-3">
            <img src="{{ asset('img/logoprodi1.png') }}" alt="logo" class="img-fluid" width="220px" />
           </div>
           <div class="footer-link col-md-2">
            <div class="mx-auto">
             <p>
              <a class="text-dark" href="{{ url('/') }}"><strong>Home</strong></a>
             </p>
             <p><a class="text-dark" href="{{ url('/profil')}}">Profil</a></p>
             <p><a class="text-dark" href="">Prestasi</a></p>
             <p><a class="text-dark" href="#">Magang</a></p>
            </div>
           </div>
           <div class="col-md-4">
            <p class="text-dark"><strong>Contact-us</strong></p>
            <p>Address: Jl Veteran No 12 – 14, Ketawanggede, Malang, Jawa Timur, Indonesia</p>
            <p>Phone: 0341-551-611</p>
            <p>Email: vokasi@ub.ac.id</p>
           </div>
           <div class="col-md-3">
            <p class="text-dark"><b>Social Media</b></p>
            <p><a class="text-dark text-decoration-none" href="https://www.instagram.com/vokasiub/" target="_blank"><i class="fab fa-instagram"></i> @vokasiub</p></a>
            <p><a class="text-dark text-decoration-none" href="https://www.youtube.com/channel/UCaGIN5Y4d6MEJxrHUY4WIUQ"><i class="fab fa-youtube"></i> Vokasi Brawijaya Channel</p></a>
           </div>
          </div>
       </div>
      </footer>
    </section>
    {{--  --}}
  </div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>