@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://mymodernmet.com/wp/wp-content/uploads/2019/09/100k-ai-faces-7.jpg" class="rounded-circle" style="height:200px;width:200px" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="pt-3 d-flex justify-content-between">
                <h1>{{ Auth::user()->name }}</h1>
                <a class="font-weight-bold" href="{{ route('posts.create') }}">Create New Post</a>
            </div>
            <div class="d-flex h6">
                <div class="pr-5">{{ Auth::user()->role }}</div>
                <div class="pr-5"><strong class="pr-1">30</strong>posts</div>
                <div><strong class="pr-1">200</strong>friends</div>
            </div>
            <div class="pt-2 font-weight-bold">Course: {{ Auth::user()->course }}</div>
            <div>About: {{ Auth::user()->about }}</div>
            <div>Website URL: <a href="imali.frog.co.ke">{{ Auth::user()->website }}</a></div>
            <a class="btn btn-primary" href="{{ route('users.edit', Auth::user()->id) }}"> Edit Profile</a>
        </div>
    </div>

    <div class="row pt-5">
    @foreach($posts as $post)
            <div class="col-4">
                <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="font-weight-bold mb-3">Title: {{ $post->title }}</h5>
                    <p class="mb-0">Description: {{ $post->detail }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Category: {{ $post->category }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('posts.show',$post->id) }}" class="card-link">View</a>
                </div>
                </div><br>
            </div>
    @endforeach
    </div>
</div>
@endsection
