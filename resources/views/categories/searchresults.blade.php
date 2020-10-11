@extends('layouts.app')

@section('content')
      <form class="form-inline my-2 my-lg-0 justify-content-end">
      <input name="query" id="query" class="form-control mr-sm-2" value="{{ request()->input('query')}}" type="text" placeholder="Search Categories" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
<div>
      <h1>Search Results</h1>
<p>{{ $categories->count()}} result(s) for '{{ request()->input('query')}}'</p>
</div>

      @foreach ($categories as $category)
          <div>
             <p>Name: {{$category->name}} </p> 
          </div>
      @endforeach

<nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

@endsection