@extends('layouts.tema')


@section('container')

    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">About</li>
              </ul>
            </nav>
            <h1 class="text-center">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-lg-6 py-3">
                <h2 class="title-section text-white">The number #1 SEO Service Company</h2>
                <div class="divider"></div>

                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nisi saepe eum ipsa. Tempore dolore itaque est blanditiis libero fugiat, ea nostrum nam at tempora quis, facilis officiis nemo mollitia.</p>
                </div>
                <div class="col-lg-6 py-3">
                <div class="img-fluid py-3 text-center">
                    <img src="../assets/img/about_frame.png" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection