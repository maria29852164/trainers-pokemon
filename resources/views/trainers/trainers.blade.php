@extends('layout/layout')
@section('trainers')
@if(session('status'))

        <div class="alert alert-info my-3">{{session('status')}}</div>
 
@endif
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
            {!! Form::open(['route'=>['trainer.destroy',$trainer->slug],'method'=>'DELETE']) !!}
           {!!Form::submit('delete',['class'=>'btn btn-danger my-2'])!!}
           {!!Form::close()!!}
        </div>
        </div>

</div>




@endforeach
</div>


@endsection
