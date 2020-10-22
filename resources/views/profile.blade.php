@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->avatar . '') }}" class="rounded-circle" style="height:200px;width:200px" onerror="this.src='uploads/avatars/avatar.png';">
        </div>
        <div class="col-9 pt-5">
            <div class="pt-3 d-flex justify-content-between">
                <h1>{{ Auth::user()->name }}</h1>
                <a class="font-weight-bold" href="{{ route('posts.create') }}">Create New Post</a>
            </div>
            <div class="d-flex h6">
                @if (Auth::user()->hasRole('administrator'))
                    <div class="pr-5">Administrator</div>
                @elseif (Auth::user()->hasRole('lecturer'))
                    <div class="pr-5">Lecturer</div>
                @else
                    <div class="pr-5">Student</div>
                @endif
                <div class="pr-5"><strong class="pr-1">{{ Auth::user()->posts->count() }}</strong>posts</div>
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
                        <p class="mb-0">Category: {{ $post->category }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                            <a href="{{ route('posts.show',$post->id) }}" class="card-link">View</a>
                            <a class="card-link" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn card-link" style="color: #4B94FD;">Delete</button>
                        </form>
                    </div>
                    
                </div><br>
            </div>
    @endforeach
    </div>
    {!! $posts->links() !!}
</div>
@endsection
