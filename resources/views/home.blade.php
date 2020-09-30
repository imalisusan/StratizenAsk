@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://mymodernmet.com/wp/wp-content/uploads/2019/09/100k-ai-faces-7.jpg" class="rounded-circle" style="height:200px;width:200px" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="pt-3"><h1>Hedda Shaffer</h1></div>
            <div class="d-flex h6">
                <div class="pr-5">Student</div>
                <div class="pr-5"><strong class="pr-1">30</strong>posts</div>
                <div><strong class="pr-1">200</strong>friends</div>
            </div>
            <div class="pt-2 font-weight-bold">Bachelor of Informatics in Computer Science</div>
            <div>Throughout that time, I’ve worked remotely for a number of exciting startups and established companies</div>
            <div><a href="hedda.co.ke">hedda.co.ke</a></div>
            <button type="button" class="btn btn-primary">Edit Profile</button>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" style="height:250px" src="https://149351115.v2.pressablecdn.com/wp-content/uploads/2020/02/iStock-1163542789.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="height:250px" src="https://miro.medium.com/max/1950/0*cJ8opIdwPZiixMjm" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="height:250px" src="https://hackernoon.com/hn-images/1*9npNPVH7iNJ64Koq7EcW5A.jpeg" alt="">
        </div>
    </div>
</div>
@endsection
