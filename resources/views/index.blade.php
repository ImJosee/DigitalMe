@extends('layouts.default')

@section('title', 'Bienvenido a digitalme')

@section('content')
    @foreach($posts as $post)
        <li>
        {{$post->title}}
        </li>
    @endforeach
@endsection    
