@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-3">
    <h2 class="">My Posts</h2>
</div>

@if (session()->has('success'))
    <div class="alert alert-secondary alert-dismissible fade show col-lg-11" role="alert">
        {{ session('success') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="table-responsive col-lg-11">
    <a href="/dashboard/posts/create" class="btn btn-sm btn-default border">
        <span data-feather="plus"></span> Create
    </a>
    <table class="table table-stripped table-sm my-3 border-top">
        <thead>
            <tr>
                <th width="50px" scope="col" class="text-center">#</th>
                <th scope="col">Title</th>
                <th width="150px" scope="col">Category</th>
                <th width="120px" scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td class="text-center">
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge text-dark" title="Detail">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge text-dark" title="Edit">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge text-dark border-0 bg-white" onclick="return confirm('Are You sure?')" title="Delete">
                            <span data-feather="x-circle"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection