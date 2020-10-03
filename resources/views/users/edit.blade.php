@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Profile</h2>
            </div>
            <div class="pull-right">
                <a class="" href="{{ route('profile',Auth::user()->id) }}"> Back</a>
            </div><br>
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
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>      
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Email</strong>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
            </div>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="phone" class="form-control"  name="phone" placeholder="Phone Number" value="{{ $user->phone }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course</strong>
                    <select name="course" class="form-control">
                        <option name="course">{{ $user->course }}</option>
                        @foreach($courses as $course)
                            <option name="course">
                                {{ $course->description }}
                            </option>
                        @endforeach
                    </select><br>
                </div>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>About:</strong>
                    <textarea class="form-control" style="height:150px" name="about" placeholder="Detail">{{ $user->about }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Website URL:</strong>
                    <input type="text" class="form-control"  name="website" placeholder="Website URL" value="{{ $user->website }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection