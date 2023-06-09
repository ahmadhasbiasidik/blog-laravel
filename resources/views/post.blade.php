@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                
                <p>
                    <small class="text-muted">
                        By 
                        <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a>
                        in 
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                            {{ $post->category->name }}
                        </a>
                    </small>
                </p>
                
                <div class="d-flex justify-content-between my-3">
                    <a href="/posts" class="btn btn-sm btn-default border"><span data-feather="chevron-left"></span>Back</a>
                </div>
                

                @if ($post->image)
                    <div style="max-height:500px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid">
                @endif
        
                <article class="my-3 fss-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>

@endsection
