@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Create New Category</h3>                          
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/categories" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Category Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug"  value="{{ old('slug') }}">   
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-8">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create post</button>
                <a href="/posts" class="btn btn-success"><i class="fas fa-arrow-left"></i> Back to all my posts</a>
            </form>
        </div>
    </div>
    
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        // function previewImage() {
        //     const image = document.querySelector('#image');
        //     const imgPreview = document.querySelector('.img-preview');

        //     imgPreview.style.display ='block';

        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(image.files[0]);

        //     oFReader.onload = function (oFREvent) {
        //         imgPreview.src = oFREvent.target.result;
        //     }

        // }
    </script>
    

@endsection