@extends('layout.master')

@section('main')

<form  method='get' action="registers" style="margin: 50px">

    @csrf
    <input type="text" placeholder="search" name="search">
    <input type="submit" value="search" name="submit">

</form>

<a href="{{ route('registers.create') }}" class="btn btn-success" style="margin-left: 50px">{{ trans('create') }}</a>
<br><br><br>

<table data-toggle='table'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>email</th>
        <th>image</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($data as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->email}}</td>

        <td> <img src="{{ url('public/Image/'.$value->image) }}" width="500px"></td>
        <td>
            <a href="{{route('registers.edit',$value->id)}}">edit</a>
            <a href="{{route('registers.show',$value->id)}}">show</a>
            <form action="{{route('registers.destroy',$value->id)}}" method="post">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">delete</button>

          </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>

@endsection
