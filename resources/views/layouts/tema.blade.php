<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Teknik Rekayasa | {{ $title }}</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  {{-- icon --}}
  <link rel="icon" href="{{ asset('assets/img/icon.png') }}" type="image/png" />

  

</head>
<body class="bg-dark">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky" >
      <div class="container">
        <img src="../assets/img/logo.png" alt="" width="80px;">

        <button class="navbar-toggler bg-light" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
              <a class="nav-link text-white {{ ( $active === "home" ) ? 'active'  : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{ ( $active === "about" ) ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{ ( $active === "blog" ) ? 'active' : '' }}" href="/blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{ ( $active === "categories" ) ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
              @auth
                <li class="nav-item">
                    <a class="nav-link text-white" href="/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        My Dashboard
                    </a>
                </li>
                <li>
                   <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger" href="#"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </li>
              @else
                  <li class="nav-item">
                      <a href="/login" class="btn btn-primary ml-lg-2 {{ ( $active === "login" ) ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </li>
              @endauth
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container mt-4">
        @yield('container')
    </div>
    

  
  <footer class="page-footer bg-image " style="background-image: url(../assets/img/world_pattern.svg);">
    <div class="container ">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-3 py-3">
          <h3>Teknik Rekayasa</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-github"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <p>46273 Dayeuhluhur. Jatinagara, Ciamis, Jawa Barat</p>
          {{-- <a href="#" class="footer-link">+00 1122 3344 5566</a> --}}
          <a href="#" class="footer-link">halo@teknikrekayasa.com</a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <p>Get updates, news or events on your mail.</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email..">
            <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2021. developed by <a href="https://instagram.com/emilmaul_" target="_blank">Emil Maulana</a></p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

{{-- login --}}
<!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('admin') }}/js/stisla.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

    

  
</body>
</html>
