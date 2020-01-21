@extends('layout/layout')


@section('form-app')



<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
  <div class="row">
   <div class="col-md-5 col-offset-5">

      <div class="panel panel-default">
       <div class="panel-heading">
          <div class="panel-title">Acceso a la apllicacion</div>
       </div>

       <div class="panel-body">
          <form method='POST' action="/trainer" class="form-group" enctype="multipart/form-data">

             @if($errors->any())
                  @foreach($errors->all as $error)

                    <div class="alert alert-danger">
                      <ul>
                      <li>{{$error}}</li>
                      </ul>
                    </div>
                   
                  @endforeach
             @endif
               @include('trainers/form')
            
          </form>

       </div>
      </div>
   </div>
  </div>
  <script src="{{asset('bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('jquery.js')}}"></script>
@endsection
