@extends('layout')
@section('content')
<div class="container">
  <h1>Edit Resturant Details</h1>
  @if(Session::get('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('edit')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  <div class="col-sm-6">
      <form action="{{route('add',$data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="formGroupExampleInput">Resturant Name</label>
            <input type="text" class="form-control" value="{{$data->name}}" name="name" id="formGroupExampleInput" placeholder="Enter Resturant Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" value="{{$data->email}}" name="email" id="formGroupExampleInput2" placeholder="Enter Resturant Email">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput2">Address</label>
              <input type="address" class="form-control" value="{{$data->address}}" name="address" id="formGroupExampleInput3" placeholder="Enter Resturant Address">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
      </form>
  </div>
</div>

@stop