<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn 
        {
            color:red; 
            background-color:#f3f3f3;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="font-weight-bold mb-3">Title: {{ $post->title }}</h5>
                    <p class="mb-0">Description: {{ $post->detail }}</p>
                    <p class="mb-0">Faculty: {{ $post->category }}</p>
                    <p class="mb-0">Author: {{  $author->name  }} </p>

                    @if (count($post->tags)>0)
                        <p class="mb-0">Tags:</p>
                        <ul>
                            @foreach ($post->tags as $tag)
                                <li><a href="{{ route ('show',['tag' => $tag] ) }}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif

                    @role('administrator')
                    <p class="mb-0">Status: {{ $post->status }}</p>
                    @endrole
                </div>
                <div class="card-body" >
                    @guest
                        <a href="{{ route('posts.index') }}" class="card-link" style="color: #4B94FD;">Back</a>
                    @else
                        @if (Auth::user()->id == $author->id)
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                <a class="card-link" href="{{ route('posts.edit',$post->id) }}"style="color: #4B94FD;">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn card-link" style="color: #4B94FD;">Delete</button>
                                    <a href="{{ route('posts.index') }}" class="card-link" style="color: #4B94FD;">Back</a>
                            </form>
                        @else
                            @role('administrator')
                                <a class="card-link" href="{{ route('update_status',$post->id) }}"style="color: #4B94FD;">Change Status</a>
                                <a href="{{ route('index_admin') }}" class="card-link" style="color: #4B94FD;">Back</a>
                            @endrole
                        @endif
                    @endguest
                </div>
        </div><br>
        </div>
@endsection
</body>
</html>