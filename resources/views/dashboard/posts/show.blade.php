@extends('dashboard/layouts/main')

@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left"></span>
                Back to all posts
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                <span data-feather="edit"></span>
                Edit post
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <span data-feather="trash-2"></span>
                    Delete Post
                </button>
            </form>

            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/app/public/' . $post->image) }}" alt="{{ asset('storage/app/public/' . $post->image) }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                    alt="{{ $post->category->slug }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

        </div>
    </div>
@endsection
