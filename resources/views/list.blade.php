<link rel="stylesheet" href="css/style.css">
@extends('layout')
@section('content')
    <h1>Resturent List</h1>
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('status')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Resturant Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Operations</th>


            </tr>
        </thead>
        
        @foreach ($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>
                    <a href="{{route('delete',$item->id)}}"><i class="fa fa-trash"></i></a>
                    
                    <a href="{{route('edit',$item->id)}}"><i class="fa fa-edit"></i></a>

                </td>
            </tr>
        @endforeach
    </table>
@stop