@extends('layouts.app')

@section('content')
      <form class="form-inline my-2 my-lg-0 justify-content-end">
      <input name="query" id="query" class="form-control mr-sm-2" value="{{ request()->input('query')}}" type="text" placeholder="Search Categories" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
<div>
      <h1>Search Results</h1>
<p>{{ $tags->count()}} result(s) for '{{ request()->input('query')}}'</p>
</div>
<div class="mt-4 card-deck">
      @foreach ($tags as $tag)
            <div class="col-3 border card-group">
                  <div class="card-body shadow-sm border">
                  <h3 class="title"><a href="/tags/{{$tag->name}}">{{$tag->name}}</a></h3>
                  <p>{{$tag->description}}</p>
            </div>
      @endforeach     
</div>


@endsection