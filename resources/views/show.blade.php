@extends('layouts.default')

@section('title', 'Post especifico')

@section('content')
    {{$post != null ? $post->getCompletePost() : 'No se encontro ese posteo'}}
@endsection    