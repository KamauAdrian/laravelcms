@extends('layouts.app')

@section('content')
    <h1>This is the post page</h1>
    <ol>
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach
    </ol>

    <a href="{{url('/contact')}}">Contact us</a>
@endsection

