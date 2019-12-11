@extends('.layouts.default')

@section('title', 'Seguidos de '.$user->getFullName())

@section('content')

@foreach($user->follows as $follow) 
    {{$follow->getFullName()}}
@endforeach

@endsection