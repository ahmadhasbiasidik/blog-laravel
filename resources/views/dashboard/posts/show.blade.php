@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
    
            <div class="d-flex justify-content-between">
                <a href="/dashboard/posts" class="btn btn-sm btn-default border">
                    <span data-feather="chevron-left"></span>Back
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-default border" title="Edit">
                    <span data-feather="edit"></span> Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-default border" onclick="return confirm('Are You sure?')" title="Delete">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                </form>
            </div>

            @if ($post->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-3">
            @endif
    
            <article class="my-3 fss-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection