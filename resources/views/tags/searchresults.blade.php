@extends('layouts.app')

@section('content')
<div class="p-4">
      <form action="{{ route('tagsearch') }}"class="form-inline my-2 my-lg-0 justify-content-end">
      <input name="query" id="query" class="form-control mr-sm-2" value="{{ request()->input('query')}}" type="text" placeholder="Search Tags" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
<div class="pl-5" width="100%">
      <div class="pl-4">
            <h1 >Search Results</h1>
      <p>{{ $tagscount }} result(s) for '{{ request()->input('query')}}'</p>
      </div>

<div>
      <div class="mt-4 card-deck pb-2 pl-5 pr-5">
            @if(count($tags)>=1)
            
            @foreach ($tags as $tag)
            <div class="col-3 card-group pb-2 mt-1 ">
                        <div class="card-body border bg-white shadow-sm">
                        <h3 class="card-title"><a href="{{ route ('show',['tag' => $tag] ) }}">{{$tag->name}}</a></h3>
                              <p>{{$tag->description}}</p>
                        </div>
                  </div>
            @endforeach 
           @else
                  <p>Nothing Found</p>
            @endif   
      </div>
      <div>
            {{$tags->links()}}
      </div>
</div>
</div>
</div>
@endsection