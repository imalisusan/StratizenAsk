@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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
                    @guest
                    
                    @else
                        @if (Auth::user()->id == $author->id)
                        @role('administrator')
                        <form action="{{ route('editStatus',$post->id) }}" method="POST">
                        @csrf
                        @method('GET')
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
                                <div class="form-group">
                                    <strong>Status</strong>
                                        <select name="status" class="form-control">
                                        <option name="status">{{ $post->status }}</option>
                                            
                                            <option name="Published">Published</option>
                                            <option name="Closed">Closed</option>
                                        </select><br>
                                </div>  
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    @endrole
                        @else
                            @role('administrator')
                            <div class="card" style="width: 100%;margin-top:10px;margin-bottom:10px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3">Title: {{ $post->title }}</h5>
                                    <p class="mb-0">Category: {{ $post->category }}</p>
                                    <p class="mb-0">Description: {{ $post->detail }}</p>
                                </div>
                            </div>
                            <form action="{{ route('publish',$post->id) }}" method="POST">
                            @csrf
                            @method('GET')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Status</strong>
                                            <select name="status" class="form-control">
                                            <option name="status">{{ $post->status }}</option>
                                                
                                                <option name="Published">Published</option>
                                                <option name="Closed">Closed</option>
                                            </select><br>
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            @endrole
                        @endif
                        @if (Auth::user()->id == $author->id)
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
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @endguest
    </div>
@endsection

                   