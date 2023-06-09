@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-3">
    <h2 class="">{{ $title }}</h2>
</div>
<div class="col-lg-8">
    
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 d-flex justify-content-between">
            <a href="/dashboard/posts" class="btn btn-sm btn-default border"><span data-feather="chevron-left">
                </span>Back
            </a>
            <button type="submit" class="btn btn-sm btn-default border">
                <span data-feather="save"></span> Update Post
            </button>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @endError" id="title" placeholder="Your title" value="{{ old('title', $post->title) }}" required autofocus>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @endError
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @endError" id="slug" placeholder="Your slug" readonly value="{{ old('slug', $post->slug) }}" required>
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @endError
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @endError" required>
                <option value=""></option>
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @endError
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if($post->image)
                <img src="{{ asset('/storage/'. $post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @endError" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @endError
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="hidden" id="body" name="body" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body" class="form-control @error('body') is-invalid @endError"></trix-editor>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @endError
        </div>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection