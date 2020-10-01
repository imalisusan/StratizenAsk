@extends('ideas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Idea</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ideas.index') }}"> Back</a>
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
<form action="{{ route('ideas.store') }}" method="POST">
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
              <strong>Idea Due Date</strong>
              <input type="date" class="form-control" name="due_date"/>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
              <strong>Manager</strong>
              <input type="text" class="form-control" name="manager"/>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
          <strong>Category</strong>
          <select name="category" class="form-control">
            <option name="category">Select Category</option>
            @foreach($tags as $tag)
                <option name="category">
                    {{ $tag->description }}
                </option>
            @endforeach
        </select><br>
          </div>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
          <strong>Visibility</strong>
          <select class="form-control" name="visibility" id="active">
          <option name="visibility"></option>
        <option value="1" @if (old('active') == 1) selected @endif>Public</option>
        <option value="0" @if (old('active') == 0) selected @endif>Private</option>
        </select>
          </div>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection