@extends('layout/layout')
@section('show')
@if(session('status'))
<div class="alert alert-success">{{session('status')}}</div>

@endif
<link rel="stylesheet" href="{{ asset('trainers/show.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
  <div class="row">
    <div class=" col-md-12 ">

            <div class="card text-center trainer-card">

                <img src="/images/{{$trainer->avatar}}" class=" trainer-app rounded-circle" alt="...">



            <div class="card-body content-trainer">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text">{{$trainer->description}}</p>
                <a href="/trainer/{{$trainer->slug}}/edit" class="btn btn-primary">edit</a>
            </div>
            </div>

    </div>

  </div>


 <script src="{{asset('bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('jquery.js')}}"></script>
@endsection
