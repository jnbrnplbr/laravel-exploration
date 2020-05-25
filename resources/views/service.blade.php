@extends('layouts.layout')

@section('content')
                  
                  <br>

                 <h1>{{ $title }}</h1> <br>

                 @foreach($services as $service)
                        <h1>{{ $service->title }} </h1>
                        <p>{{ $service->description }}</p>
                        <p>{{ $service->remarks }}</p>
                 @endforeach

@endsection
