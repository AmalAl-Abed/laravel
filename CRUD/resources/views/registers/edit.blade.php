@extends('layout.master')

@section('main')

<h1>emplyee name:{{$register->name}}</h1>
<form method="post" action="{{route('registers.update',$register->id)}}">
    @csrf

    @method('PUT')
    <div class="form-group">

      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" name="name" value="{{$register->name}}">

    </div>

    <div class="form-group">

        <label>Email address</label>
        <input type="email" class="form-control"  value="{{$register->email}}"name="mail"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

      </div>

    <div class="form-group">
      <label for="exampleInputPassword1">age</label>
      <input type="number" class="form-control" name="age"  value="{{$register->age}}"placeholder="age">
    </div>

    <button type="submit" class="btn btn-primary" style="margin: 20px">update</button>
  </form>






@endsection
