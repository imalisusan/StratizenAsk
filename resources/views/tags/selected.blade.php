@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <form action="{{ route('search') }}"class="form-inline my-2 my-lg-0 justify-content-end">
                <input name="query" id="query" class="form-control mr-sm-2" type="text" value="{{$tag->name}}" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <div class="display-3 text-capitalize"><h1>{{$tag->name}}</h1></div>
        </div>

        <p>{{ $posts->count()}} post(s) under '{{$tag->name}}'</p>
    @if(count($posts)>0) 
    @foreach ($posts as $post)
        <div class="card" style="width: 100%;"> 
                <div class="card-body">
                    <h5 class="font-weight-bold mb-3">Title: {{ $post->title }}</h5>
                    <p class="mb-0">Description: {{ $post->detail }}</p>
                    <p class="mb-0">Category: {{ $post->category }}</p>
                </div>
                <div class="card-body">
                    <a href="{{ route('posts.show',$post->id) }}" class="card-link">View</a>
                    <a class="card-link" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                </div>
        </div><br>
    @endforeach
    @else
            <p>Nothing Found</p>
      @endif
    </div>
@endsection