@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
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
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty</strong>
                    <select name="category" class="form-control">
                        <option name="category">Select Faculty</option>
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
                <select name="tag"id="tag" class="form-control mdb-select md-form"onkeyup="filterFunction() multiple searchable="Search here..">
                    <option name="tag" disabled selected>Select Tag</option>
                    @foreach($tags as $category)
                        <option name="category">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select><br>
            </div>
        </div>
        
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
@endsection
