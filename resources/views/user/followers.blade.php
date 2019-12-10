@extends('.layouts.default')

@section('title', 'Seguidores de '.$user->getFullName())

@section('content')

@foreach($user->followers as $follower) 
    {{$follower->getFullName()}}
@endforeach

@endsection