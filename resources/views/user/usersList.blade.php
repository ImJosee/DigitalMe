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
            <a class="abajo linksection" href="login">Usuarios</a>
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
      <div class="row justify-content-center">
      @foreach($users as $user)
        <a href="/profile/">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="publicacion">
                <img src="{{ asset('images/profile-img.jpg') }}" alt="">
                <div class="info-post">
                    <span class="post-info-user">
                        <div class="post-info-user-container">
                            <a id="user-info-anchor" href="/profile/">{{$user->getFullName()}}</a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        </a>
      @endforeach
      </div>
    </div>
    @if(request()->has('search'))
        {{$users->appends(request()->all())->links()}}
    @endif

</main>


@endsection