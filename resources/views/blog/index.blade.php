@extends('layouts/main')

@section('container')
    <h1 class="mb-4 text-center">{{ $titlePage }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search posts here..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-dark" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count() > 0)
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/app/public/' . $posts[0]->image) }}" alt="{{ asset('storage/app/public/' . $posts[0]->image) }}" class="card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}"
                    alt="{{ $posts[0]->category->slug }}" class="card-img-top">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/blog?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/blog?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->updated_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/blog/post/{{ $posts[0]->slug }}" class="btn btn-danger">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute end-0 px-3 py-2 text-white rounded-pill"
                                style="background-color: rgba(0, 0, 0, 0.8)"><a
                                    href="/blog?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                            @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                        class="card-img-top">
                            @else
                                <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                                    alt="{{ $post->category->slug }}" class="card-img-top">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/blog?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->updated_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/post/{{ $post->slug }}" class="btn btn-danger">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h5 class="text-center">No post found.</h5>
    @endif
    <div class="ms-2">
        {{ $posts->links() }}
    </div>

@endsection
