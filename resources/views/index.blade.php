@extends('layouts.default')

@section('title', 'Bienvenido a digitalme')

@section('content')
    @foreach($posts as $post)
        {{$post->title}}
    @endforeach
@endsection    
