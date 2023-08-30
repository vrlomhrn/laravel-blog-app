@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>

    <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
          <img src="https://source.unsplash.com/2140x1080?blog" class="w-100" alt="test">
        </div>
        <div class="col-md-6 p-4 ps-md-0">
          <h5 class="mt-0">Come see another post from another user</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, at ducimus temporibus tempore doloremque vel adipisci, possimus, aliquam totam quasi inventore cumque deleniti ipsum error cum qui veniam quibusdam eos?</p>
          <a href="/blog" class="btn btn-dark">Go see all posts</a>
        </div>
      </div>
@endsection
