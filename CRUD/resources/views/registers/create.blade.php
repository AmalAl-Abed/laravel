@extends('layout.master')

@section('main')


<form action="{{route('registers.store')}}"  method="POST" >
    @csrf

    <div class="form-group">

      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

    </div>

    <div class="form-group">

        <label>Email address</label>
        <input type="email" class="form-control" name="mail"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

      </div>

    <div class="form-group">
      <label for="exampleInputPassword1">age</label>
      <input type="number" class="form-control" name="age" placeholder="age">
    </div>

    <button type="submit" class="btn btn-primary" style="margin: 20px">add new user</button>
  </form>






@endsection
