@extends('layout')
@section('content')
<div class="container">
  <h1>Add Resturant</h1>
  <div class="col-sm-6">
      <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="formGroupExampleInput">Resturant Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Enter Resturant Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput2">Address</label>
              <input type="address" class="form-control" name="address" id="formGroupExampleInput3" placeholder="Enter Resturant Address">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
      </form>
  </div>
</div>

@stop