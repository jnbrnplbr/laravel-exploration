@extends('layouts.layout')

@section('content')


<br>
<h1> Contact Page</h1> <br><br>

<?php 
   foreach($names as $name){
      echo $name.'<br>';
   }
?>

@foreach($names as $name)
   {{ $name }}
@endforeach

@endsection