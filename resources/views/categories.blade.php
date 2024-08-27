@extends('layouts.tema')


@section('container')

   

    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
              </ul>
            </nav>
            <h1 class="text-center">Post Categories</h1>
          </div>
        </div>
      </div>
    </div>

      <div class="page-section">
        <div class="container">
            <div class="row">
                @foreach ( $categories as $category )
                <div class="col-lg-4 ">
                    <div class="card-service bg-light">
                        <div class="header">
                        <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top" alt="{{ $category->name }}" class="img-fluid">
                        </div>
                        <div class="body">
                        <h5 class="text-secondary">{{ $category->name }}</h5>
                        <a href="/blogs?category={{ $category->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      </div> <!-- .container -->
    </div>

    {{-- @foreach ($categories as $category)

    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a> </h2>
        </li>
    </ul>

        
    @endforeach --}}

@endsection

