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
@extends('ideas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Idea Details</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $idea->title }}: Views {here}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $idea->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due Date:</strong>
                {{ $idea->due_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manager:</strong>
                {{ $idea->manager }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $idea->category }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $idea->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Visibility:</strong>
                {{ $idea->visibility }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <a class="btn" id="btn" href="{{ route('ideas-like', $idea->id) }}" >Like</a>
            <a class="btn" id="btn" href="{{ route('ideas-dislike', $idea->id) }}">Dislike</a>
            <a class="btn" id="btn" href="{{ route('ideas-interest', $idea->id) }}">Show Interest</a>
            <a class="btn" id="btn" href="{{ route('ideas-uninterest', $idea->id) }}">Revoke Interest</a>
            </div>
        </div>  
    </div>
    <br>
    <div>
            @comments(['model' => $idea])
        </div>

        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('ideas.index') }}"> Back</a>
        </div>
@endsection
</body>
</html>