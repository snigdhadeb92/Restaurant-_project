@extends('layout')
@section('content')
<div class="container">
  <h1>Login</h1>
  @if(Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{Session::get('error')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  <div class="col-sm-6">
      <form action="{{route('user_login')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group">
            <label for="formGroupExampleInput2">Username</label>
            <input type="text" class="form-control" name="username" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
        <button type="submit" class="btn btn-success">Login</button>
      </form>
  </div>
</div>

@stop