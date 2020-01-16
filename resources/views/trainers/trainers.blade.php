@extends('layout/layout')
@section('trainers')
<div class="row">
@foreach($trainers as $trainer)

<link rel="stylesheet" href="{{ asset('trainers/app.css') }}">


<div class="col-sm col-md-4">

        <div class="card text-center trainer-card" style="width: 18rem;">
        <img src="images/{{$trainer->avatar}}" class="card-img-top trainer-app rounded-circle" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">{{$trainer->description}}</p>
            <a href="/trainer/{{$trainer->slug}}" class="btn btn-primary">See More...</a>
        </div>
        </div>

</div>




@endforeach
</div>
@endsection
