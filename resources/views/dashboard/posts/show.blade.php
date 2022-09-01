@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $posts->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> back to all my posts</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($posts->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top mt-3" alt="{{ $posts->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="card-img-top mt-3" alt="{{ $posts->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $posts->body !!}
            </article>

            {{-- <a href="/posts" class=" d-block mt-3 text-decoration-none">Back to Post</a> --}}
        </div>
    </div>
</div>

@endsection
