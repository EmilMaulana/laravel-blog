@extends('layouts.tema')

@section('container')

    <div class="row mb-5 justify-content-center">
        <div class="col w-75 card bg-white mb-3">
            <div class="card-body">
                <h2 class="mt-3 text-capitalize">{{ $post->title }}</h2>
                <p class="">By. <a href="/blogs?user={{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blogs?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}</a></p>
                <hr>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top " alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else      
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3">
                    <p>{!! $post->body !!}</p>
                </article>
                <a href="/blogs" class="btn btn-danger d-block my-5 text-decoration-none"><i class="fas fa-backward"></i> Back to all posts</a>
            </div>
        </div>
        <div class="col-lg-3 card mx-3 mb-3"> 
            <div class="card-body">
                <h5><i class="fas fa-rss-square text-dark"></i> Newsletter</h5>
                <p>Dapatkan informasi terbaru dari Teknik Rekayasa dengan berlangganan Newsletter</p>
                <form action="#">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control mb-2" name="name" placeholder="Enter your name..">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email..">
                    <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>  

    
@endsection