@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">My Post Author</h3>
        <hr>                          
    </div>

    
    <div class="container">
        <div class="table-responsive mt-4 col-md-10">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                   {{ session('success') }}
                </div>
            @endif
            <a href="/author/create" class="btn btn-primary mb-3"><i class="fas fa-plus text-white mr-2"></i>Create new posts</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)  
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="text-center">
                            <a href="/posts/{{ $post->slug }}" class="btn btn-info my-2"><i class="fas fa-eye text-white"></i></a>
                            <a href="/posts/{{ $post->slug }}/edit" class="btn btn-warning my-2"><i class="fas fa-user-edit text-white text-center"></i></a>
                            <form action="/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger my-2" onclick="return confirm('Are you sure you want to delete this post? ?')"><i class="fas fa-trash-alt text-white text-center"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                
            
@endsection