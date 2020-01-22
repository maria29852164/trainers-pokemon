@extends('layout/layout')
@section('edit')
<link rel="stylesheet" href="{{ asset('trainers/edit.css') }}">
<link rel="stylesheet" href="{{ asset('trainers/show.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
@if(session('status'))
  <div class="alert alert-info">{{session('status')}}</div>
@endif

<div class="container">
<h2 class="text-center app-title">Edit yout trainer here</h2>
<form method='POST' action="/trainer/{{$trainer->slug}}" class="form-group" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <img src="/images/{{$trainer->avatar}} " class="trainer-app rounded-circle">
            <div class="form-group ">
              <label for="nametrainer">Name trainer</label>
              <input type="text" class="form-control" value={{$trainer->name}} name="name" id="nametrainer">

            </div>


            <div class="form-group ">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" value ="{{$trainer->password}}"id="password-trainer" name="password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="checkbox">
              <label class="form-check-label" for="exampleCheck1" >Show password</label>
            </div>

            <div class="form-group">
               <label for="avatar">Avatar Trainer</label>
                <input type="file" id="avatar"  name="avatar">
            </div>
           

            <div class="form-group">
                <label for="description">description trainer
               <textarea id="description"class=" text-tarea-app" name="description" >{{$trainer->description}}</textarea>
            </div>


            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            {!! Form::open(['route'=>['trainer.destroy',$trainer->slug],'method'=>'DELETE']) !!}
           {!!Form::submit('delete',['class'=>'btn btn-danger my-2'])!!}
           {!!Form::close()!!}
          </form>
       
</div>

<script src="{{asset('bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('jquery.js')}}"></script>
<script src="{{asset('showpassword/showpass.js')}}"></script>
@endsection