@extends('layouts.tema')


@section('container')

    <h4 class="mb-3 text-center text-white">{{ $title }}</h4>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6 wow fadeInUp">
            <form action="/blogs">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search
                </button>
                </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
        @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top mt-3" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
        @else      
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card mb-3">
            <div class="card-body text-center">
                <h3><a href="/blogs/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title }}</a></h3>
                <p>
                    <small>
                        By. <a href="/blogs?user={{ $posts[0]->user->name }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/blogs?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/blogs/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>           
            </div>
        </div>


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 wow fadeInUp">
                <div class="card mb-3 mt-3">
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
    </div>
    @else
    <p class="text-center fs-4">No post found. </p>
    @endif

    <div class="d-flex justify-content-center mt-5">
         {{ $posts->links() }}
    </div>
   

@endsection

