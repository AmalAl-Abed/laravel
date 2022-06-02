@extends('master');

@section('main-content')

<h1>Welcome from Home Page</h1>

@foreach($data as $value)
<p>{{$value}}</p>
@endforeach

@endsection
