@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StratizenAsk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #333;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <div class="container">
        <div class="flex-center position-ref full-height">
                <div class="content"> 
                
                    <div class="links">
                    <a class="" href="{{ route('posts.index') }}">View Posts</a>
                    @role('administrator')
                        <a class="" href="{{ route('laratrust.roles-assignment.index') }}">Admin Panel</a>
                    @endrole
                    @role('administrator')
                        <a class="" href="{{ route('users.index') }}">Users</a>
                    @endrole
                    <div id="search" style="margin-top:40px;">
                    <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" placeholder="Search StratizenAsk" style="width:600px;height:60px;margin-bottom:20px;border: 1px solid #A0AEC0;" class=""><br>
                    <button type="submit" class="btn btn-primary" style="background-color:#5E57D4; border: 1px solid #5E57D4;"> Search</button>
                    </form>
                    </div>
                    <div class="title m-b-md">
                        <div><img src="uploads/avatars/logo.png" style="height:200px; " class="pr-3" a></div>
                    </div>
                    </div>
                </div>
        </div>
       </div>
    </body>
</html>
@endsection