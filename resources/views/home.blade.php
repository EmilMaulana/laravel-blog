@extends('layouts.tema')


@section('container')

    <div class="container">
      <div class="page-banner home-banner bg-light">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-2 wow fadeInLeft">
            <h1 class="mb-4 fw-bold">Teknik Rekayasa</h1>
            
            <a href="/blogs" class="btn btn-primary btn-split">View More<div class="fab"><span class="mai-more"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="../assets/img/hero.svg" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
        <div class="text-center  wow fadeInUp">
            <div class="subhead text-white">Our Blog</div>
            <h2 class="title-section text-white">Read Latest News</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 py-3 wow fadeInUp">
                <div class="card-blog bg-white">
                    <div class="position-absolute px-2 py-1 " style="background-color: rgba(0,0,0,0.7) "> <a href="/blogs?category={{ $post->category->slug }}" class="text-white text-decoration-none"> {{ $post->category->name }}</a></div>
                    @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    @else      
                        <img src="https://source.unsplash.com/300x200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/blogs/{{ $post->slug }}" class="text-decoration-none text-capitalize">{{$post->title }}</a></h5>
                        <p>
                            <small>
                                By. <a href="/blogs?user={{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/blogs/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="/blogs" class="btn btn-primary">View More</a>
        </div>
    </div>

        

@endsection
        
    