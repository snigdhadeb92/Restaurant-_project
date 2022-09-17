@extends('layout')
@section('content')
<div class="container">
  <h1>Registration</h1>
  @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('status')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  <div class="col-sm-6">
      <form action="{{route('user_registration')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Enter Resturant Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone No.</label>
            <input type="tel" class="form-control" name="phone" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Username</label>
            <input type="text" class="form-control" name="username" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput2">Address</label>
              <input type="text" class="form-control" name="address" id="formGroupExampleInput3" placeholder="Enter Resturant Address">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
      </form>
  </div>
</div>

@stop