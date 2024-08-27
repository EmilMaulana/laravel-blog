@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Post Categories</h3>
        <hr>                          
    </div>

    
    <div class="container">
        <div class="table-responsive mt-4 col-md-10">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                   {{ session('success') }}
                </div>
            @endif
            <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="fas fa-plus text-white mr-2"></i>Create new category</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>           
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)  
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        {{-- <td class="text-center">
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger my-2" onclick="return confirm('Are you sure you want to delete this post? ?')"><i class="fas fa-trash-alt text-white text-center"></i></button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                
            
@endsection