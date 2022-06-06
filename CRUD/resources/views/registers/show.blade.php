@extends('layout.master')

@section('main')




    <div class="form-group">

        <label for="exampleInputEmail1">name:</label>
        <input type="text" class="form-control" name="name" value="{{$register->name}}" disabled>

      </div>

      <div class="form-group">

          <label>Email address</label>
          <input type="email" class="form-control"  disabled value="{{$register->email}}"name="mail"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

      <div class="form-group">
        <label for="exampleInputPassword1">age</label>
        <input type="number" class="form-control" name="age"  disabled value="{{$register->age}}"placeholder="age">
    </div>









@endsection
