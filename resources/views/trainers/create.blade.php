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

            @csrf
            <div class="form-group ">
              <label for="nametrainer">Name trainer</label>
              <input type="text" class="form-control"  name="name" id="nametrainer">

            </div>


            <div class="form-group ">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <div class="form-group">
               <label for="avatar">Avatar Trainer</label>
                <input type="file" id="avatar"  name="avatar">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="form-group">
                <label for="description">description trainer
               <textarea id="description"class="form-control" name="description"></textarea>
            </div>


            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>

       </div>
      </div>
   </div>
  </div>
  <script src="{{asset('bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('jquery.js')}}"></script>
@endsection
