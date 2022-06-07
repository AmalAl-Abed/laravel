@extends('layout.master')

@section('main')


<form action="{{route('registers.store')}}"  method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="form-group">

      <label for="exampleInputEmail1">{{ trans('name') }}</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

    </div>

    <div class="form-group">

        <label for="exampleInputEmail1">employee image</label>
        <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

      </div>

    <div class="form-group">

        <label>Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">

      </div>

    <div class="form-group">
      <label for="exampleInputPassword1">{{ trans('age') }}</label>
      <input type="number" class="form-control" name="age" placeholder="age">
    </div>

    <button type="submit" class="btn btn-primary" style="margin: 20px">add new user</button>
  </form>






@endsection
