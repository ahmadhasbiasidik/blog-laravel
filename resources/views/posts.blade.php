@extends('layouts.main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark ">Cari</button>
                </div>
            </form>
        </div>
    </div>
    
    @if ($posts->count())
    
        <div class="card mb-3">

            @if ($posts[0]->image)
                <div style="max-height:500px; overflow:hidden;" class="">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" style="margin: 0 auto;" alt="" class="d-block img-fluid card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none text-dark">
                    {{ $posts[0]->title}}    
                    </a></h3>
                <p>
                    <small class="text-muted">
                        By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }} </p>
                <a href="/posts/{{ $posts[0]->slug}}" class="btn btn-default border">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div style="background-color: rgba(0, 0, 0, 0.7)" class="position-absolute px-2 py-1"><a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">{{ $post->category->name }}</a></div>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid card-img-top">
                    @else
                        <img src="https://source.unsplash.com/300x150?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/posts/{{ $post->slug}}" class="text-decoration-none text-dark">{{ $post['title'] }}</a>
                        </h5>
                        <p>
                            <small class="text-muted">
                                By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p>{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug}}" class="btn btn-default border">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else

        <p class="text-center fs-4">No post found.</p>
    
    @endif

    <div class="d-flex justify-content-end text-light">
        {{ $posts->links() }}
    </div>
@endsection