@extends('.layouts.default')

@section('title', 'Lista de usuarios')

@section('content')

<section>
    <div class="descripcion">
        <h2 class="date">Date a conocer.</h2>
    </div>
    </section>
    <section>
    <nav class="section-na navbar navbar-expand-lg navbar-light bg-light justify-content-center sticky-top-2">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="abajo linksection" href="index">Lo mejor de digitalMe</a>
        </li>
        <li class="nav-item">
            <a class="abajo linksection" href="{{ asset('/users') }}">Usuarios</a>
        </li>
        </ul>
    </nav>
    </section>
<main>
    @if(request()->has('search'))
        @if(count($users) == 0)
        <h2 id="search-results">No se encontraron resultados para: {{request('search')}}</h2>
        @else
        <h2 id="search-results">Resultados para: {{request('search')}} (Total: {{$users->total()}})</h2>
        @endif
    @endif
    <div class="publicaciones container justify-content-center">
      <div class="row justify-content-center main-profile-container">
        @foreach($users as $user)
        <div id="profile-card-container" class="col-sm-12 col-md-6 col-lg-4">
                @if($user->profile_image != null) 
                    <a href="/profile/{{$user->id}}"><img id="profile-user-list" src="/storage/{{$user->profile_image}}" alt=""></a>
                @else
                    <a href="/profile/{{$user->id}}"><img id="profile-user-list" src="{{ asset('images/profile-img.jpg') }}" alt=""></a>
                @endif
                <div class="card-body profile-details">
                    <h5 class="card-title profile-name">{{$user->getFullName()}}</h5>
                    <p class="card-text profile-text">{{$user->web}}</p>
                    <a href="/profile/{{$user->id}}" class="btn btn-primary profile-btn">Ver perfil</a>
                </div>
            </div>
        @endforeach  
      </div>
    </div>
    @if(request()->has('search'))
        {{$users->appends(request()->all())->links()}}
    @endif

</main>


@endsection