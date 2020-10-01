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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Post Details</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $post->title }}
                    <strong>Author:</strong>
                    {{ $author->name }}
                </div>
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $post->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $post->category }}
            </div>
        </div>  
    </div>
    <br>
    <div>
        </div>
      
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
@endsection
</body>
</html>