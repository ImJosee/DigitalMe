@extends('.layouts.default')

@section('title', 'Seguidores de '.$user->getFullName())

@section('content')

<div class="publicaciones container-fluid justify-content-center">
    <div class="row justify-content-center main-profile-container">
        <div class="col-md-12">
            <div class="profile-info-right">
                <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                    <li><a href="#followers" data-toggle="tab">Seguidores</a></li>
                    <li><a href="#following" data-toggle="tab">Seguidos</a></li>
                </ul>
                <div class="tab-content">
                    <!-- followers -->
                    <div class="tab-pane fade" id="followers">
                        <div class="col-md-12">
                            <div class="row">
                                @forelse($user->followers()->paginate(12) as $followUser)
                                <div class="col-md-3">
                                    <div class="media user-follower">
                                        <a href="/profile/{{$followUser->id}}">
                                            @if($followUser->profile_image != null) 
                                                <img src="/storage/{{$followUser->profile_image}}" alt="" class="media-object pull-left">
                                            @else
                                                <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="media-object pull-left">
                                            @endif
                                            <div class="media-body">
                                                <a href="/profile/{{$followUser->id}}" class="nameFollow">{{$followUser->getFullName()}}<br><span class="text-muted username">Publicaciones: {{count($followUser->posts()->getResults())}}</span></a><br>
                                                <form id="follow-form" action="/follow/{{$followUser->id}}" method="POST">
                                                    @csrf
                                                    <button id="follow-button" class="profile-button seguir" type="submit" name="follow" style="font-size: 13px;">
                                                        @if(auth()->user()->follows->contains('id', $followUser->id))
                                                            Dejar de seguir
                                                        @else
                                                            Seguir
                                                        @endif
                                                    </button>
                                                </form>  
                                            </div>
                                        </a>
                                    </div>
                                </div>    
                                @empty
                                    <p>El usuario no tiene seguidores</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- end followers -->
                    <!-- following -->
                    <div class="tab-pane fade" id="following">
                        <div class="col-md-12">
                            <div class="row">
                                @forelse($user->follows()->paginate(12) as $followUser)
                                <div class="col-md-3">
                                    <div class="media user-following">
                                        <a href="/profile/{{$followUser->id}}">
                                            @if($followUser->profile_image != null) 
                                                <img src="/storage/{{$followUser->profile_image}}" alt="" class="media-object pull-left">
                                            @else
                                                <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="media-object pull-left">
                                            @endif
                                            <div class="media-body">
                                                <a href="/profile/{{$followUser->id}}" class="nameFollow">{{$followUser->getFullName()}}<br><span class="text-muted username">Publicaciones: {{count($followUser->posts()->getResults())}}</span></a><br>
                                            </div>
                                        </a>
                                    </div>
                                </div>    
                                @empty
                                    <p>El usuario no sigue a nadie</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- end following -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="publicaciones container-fluid justify-content-center">
    <div class="row justify-content-center main-profile-container">
    @foreach($user->followers()->paginate(12) as $user)
    <div id="profile-card-container" class="col-sm-12 col-md-6 col-lg-3">
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
</div> -->

@endsection