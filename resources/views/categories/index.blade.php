@extends('layouts.app')

@section('content')
      <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">
      <div class="display-3"><h1>Categories</h1></div>
      <p>Here you can find questions and posts easily using the keywords that are used to group them into categories.</p>
      </div>
<form action="{{ route('search') }}"class="form-inline my-2 my-lg-0">
            <input name="query" id="query" class="form-control mr-sm-2" type="text" placeholder="Search Categories" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
<div class="border mt-4 shadow-sm card-deck">
      @if(count($categories)>1)
      @foreach ($categories as $category)
            <div class="col-3 border">
                  <div class="card-body">
                  <h3 class="title"><a href="/categories/{{$category->id}}">{{$category->name}}</a></h3>
                        <p>{{$category->description}}</p>
                  </div>
            </div>
      @endforeach
     @else
            <p>Nothing Found</p>
      @endif

</div>
<nav aria-label="Page navigation example" class="mt-3">
      <ul class="pagination justify-content-end">
        <li class="page-item p-1"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item p-1 active"><a class="page-link" href="">1</a></li>
        <li class="page-item p-1"><a class="page-link" href="#">2</a></li>
        <li class="page-item p-1"><a class="page-link" href="#">3</a></li>
        <li class="page-item p-1"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

@endsection