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
                    <p class="mb-0">Category: {{ $post->category }}</p>
                    <p class="mb-0">Author: {{  $author->name  }} </p>
                </div>
                <div class="card-body" >
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    {{ $author->id }}
                    {{Auth::user()->id}}
                    
                    <a class="card-link" href="{{ route('posts.edit',$post->id) }}"style="color: #4B94FD;">Edit</a>
                    @role('administrator')
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn card-link" style="color: #4B94FD;">Delete</button>
                    @endrole
                    <a href="{{ route('posts.index') }}" class="card-link" style="color: #4B94FD;">Back</a>
                    </form>
                </div>
        </div><br>

        </div>
@endsection
</body>
</html>