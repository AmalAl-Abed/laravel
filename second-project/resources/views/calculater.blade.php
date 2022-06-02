@extends('master')

@section('main-content')

<h1>Welcome from calculater Page</h1>

<form action="calculater" method="post">
    {{ csrf_field() }}

    <label for="fname">First number:</label><br>
    <input type="text" id="fname" name="fnum" value=""><br>
    <label for="lname">second name:</label><br>
    <input type="text" id="lname" name="lnum" value=""><br><br>
    <input type="submit" value="add" name="add" onclick="window.location='{{route('value')}}'">
    <input type="submit" value="subtract" name="">
    <input type="submit" value="multiply" name="">
    <input type="submit" value="divide" name="">
  </form>


<p> {{$result}}</p>

@endsection
