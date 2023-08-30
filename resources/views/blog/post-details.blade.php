@extends('layouts/main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>By. <a href="/blog?author={{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a>
                in
                <a href="/blog?category={{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                    alt="{{ $post->category->slug }}" class="card-img-top">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/blog" class="btn btn-primary">Back to previous page</a>
        </div>
    </div>
@endsection
