@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                </div>      
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $post->detail }}</textarea>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category</strong>
                        <select name="category" class="form-control">
                          <option name="category">{{ $post->category }}</option>
                        @foreach($courses as $course)
                            <option name="category">
                                {{ $course->description }}
                            </option>
                        @endforeach
                        </select><br>
                </div>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" id="myDropdown">
                <strong>Tags:</strong>
                <select multiple  name ="tags[]" id="tags" class="form-control mdb-select md-form" searchable="Search here..">
                    <option disabled selected>Select Tag</option>
                    @foreach($tags as $tag)
                        <option value={{$tag->id}}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select><br> 
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection