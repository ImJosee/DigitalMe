@extends('.layouts.default')

@section('title', 'Seguidores de '.$user->getFullName())

@section('content')

<div class="publicaciones container-fluid justify-content-center">
    <div class="row justify-content-center main-profile-container">
        <div class="col-md-12">
            <div class="profile-info-right">
                <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                    <li><a href="#followers" data-toggle="tab">FOLLOWERS</a></li>
                    <li><a href="#following" data-toggle="tab">FOLLOWING</a></li>
                </ul>
                <div class="tab-content">
                    <!-- followers -->
                    <div class="tab-pane fade" id="followers">
                        @foreach($user->followers()->paginate(12) as $user)
                        <div class="col-md-3">
                            <div class="media user-follower">
                                <a href="/profile/{{$user->id}}">
                                    @if($user->profile_image != null) 
                                        <img src="/storage/{{$user->profile_image}}" alt="" class="media-object pull-left">
                                    @else
                                        <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="media-object pull-left">
                                    @endif
                                    <div class="media-body">
                                        <a href="/profile/{{$user->id}}">{{$user->getFullName()}}<br><span class="text-muted username">Publicaciones: {{count($user->posts()->getResults())}}</span></a><br>
                                        <button type="button" class="btn btn-sm boton-custom"><span style="color: white;">Follow</span></button>
                                    </div>
                                </a>
                            </div>
                        </div>    
                        @endforeach  
                    </div>
                    <!-- end followers -->
                    <!-- following -->
                    <div class="tab-pane fade" id="following">
                        @foreach($user->followers()->paginate(12) as $user)
                        <div class="col-md-3">
                            <div class="media user-following">
                                <a href="/profile/{{$user->id}}">
                                    @if($user->profile_image != null) 
                                        <img src="/storage/{{$user->profile_image}}" alt="" class="media-object pull-left">
                                    @else
                                        <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="media-object pull-left">
                                    @endif
                                    <div class="media-body">
                                        <a href="/profile/{{$user->id}}">{{$user->getFullName()}}<br><span class="text-muted username">Publicaciones: {{count($user->posts()->getResults())}}</span></a><br>
                                        <button type="button" class="btn btn-sm boton-custom"><span style="color: white;">Follow</span></button>
                                    </div>
                                </a>
                            </div>
                        </div>    
                        @endforeach  
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