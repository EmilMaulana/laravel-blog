@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 mt-5">
            <div class="card shadow rounded-3">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <hr>
                    <p>Oleh : <a href="/artikel?user={{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a>
                        -
                        <a href="/artikel?category={{ $post->category->slug }}" class="text-white text-decoration-none badge bg-danger"> {{ $post->category->name }}</a>
                    </p>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img img-fluid rounded-3" alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
                    @else      
                        <img src="https://source.unsplash.com/1200x650?{{ $post->category->name }}" class="card-img img-fluid rounded-3" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3">
                        <p>{!! $post->body !!}</p>
                    </article>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card shadow rounded-3">
                <div class="card-body">
                    <h5><i class="fa-solid fa-book"></i> Artikel Terbaru</h5>
                    <hr class="">
                    @foreach ($terbaru as $terbaru)
                    <div class="mt-2">
                        <a href="/artikel/{{ $terbaru->slug }}" class="text-decoration-none">
                            @if ($terbaru->image)
                                <div style="max-height: 170px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $terbaru->image) }}" class="rounded-3 card-img img-fluid" alt="{{ $terbaru->category->name }}" >
                                </div>
                            @else      
                                <img src="https://source.unsplash.com/1200x680?{{ $terbaru->category->name }}" class="card-img img-fluid rounded-3 " alt="{{ $terbaru->category->name }}" class="img-fluid">
                            @endif
                            <h6 class="card-text fw-bold text-dark mt-2 mb-n1">{{ $terbaru->title }}</h6>
                            <small class="text-secondary">Oleh : {{ $post->user->name }}</small>
                            <br>
                            <h6 class="badge bg-danger text-white">{{ $terbaru->category->name }}</h6>
                        </a>
                        <br>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection