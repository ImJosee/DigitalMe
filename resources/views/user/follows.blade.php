@extends('.layouts.default')

@section('title', 'Seguidos de '.$user->getFullName())

@section('content')

<div class="publicaciones container justify-content-center">
    <div class="row justify-content-center main-profile-container">
    @foreach($user->follows as $user)
    <div id="profile-card-container" class="col-sm-12 col-md-6 col-lg-4">
            @if($user->profile_image != null) 
                <a href="/profile/{{$user->id}}"><img id="profile-user-list" src="/storage/{{$user->profile_image}}" alt=""></a>
            @else
                <a href="/profile/{{$user->id}}"><img id="profile-user-list" src="{{ asset('images/profile-img.jpg') }}" alt=""></a>
            @endif
            <div class="card-body profile-details">
                <h5 class="card-title profile-name">{{$user->getFullName()}}</h5>
                <p class="card-text profile-text">Publicaciones: {{count($user->posts()->getResults())}}</p>
                <a href="/profile/{{$user->id}}" class="btn btn-primary profile-btn">Ver perfil</a>
            </div>
        </div>
    @endforeach  
    </div>
</div>
@endsection