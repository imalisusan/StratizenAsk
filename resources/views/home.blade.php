@extends('layouts.app')
@section('content')
    <div class="container">
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="font-weight-bold mb-3">Title: {{ $post->title }}</h5>
                    <p class="mb-0">Description: {{ $post->detail }}</p>
                    <p class="mb-0">Category: {{ $post->category }}</p>
                    <p class="mb-0">Published on: {{ $post->created_at }}</p>
                </div>
                <div class="card-body">
                    <a href="{{ route('posts.show',$post->id) }}" class="card-link">View</a>
                </div>
        </div><br>

    @endforeach
    {!! $posts->links() !!}
    </div>
@endsection