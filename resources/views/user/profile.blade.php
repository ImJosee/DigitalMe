@extends('.layouts.default')

@section('title', 'Perfil de {{$user->getFullName()}}')

@section('content')

<section class="general-content">
      <section class="move_left_desktop">
        <div class="descripcion-perfil">
          <img src="{{ asset('images/profile-img.jpg') }}" class="profile-image" alt="profile image">
            <ul class="avatar-info" id="nav">
              <h3 class="h3-perfil">{{$user->getFullName()}}</h3>
              <li>Job Title</li>
              <li>Empresa</li>
              <li> <a href="">www.digital-me.com</a> </li>
              <li> <a href=""><img src="{{ asset('images/location.svg') }}" class="location-icon" alt="location icon">Lugar</a> </li>
              <li><a href="/followers/{{$user->id}}">Seguidores: {{$user->followers()->paginate(1)->total()}}</a></li>
            </ul>
        </div>
        <div class="">
            <ul class="fol-mes-buttons">
            @auth
                <button class="seguir" type="submit" name="seguir">Seguir</button>
                <button class="mensaje"type="submit" name="mensaje">Mensaje</button>
                @if(Auth::user()->id === $user->id)
                    <button onclick="redirectTo('profile/{{$user->id}}/edit')" class="seguir"type="submit" name="edit-profile">Editar perfil</button>
                @endif
            @else
                <button onclick="redirectTo('login')" class="seguir" type="submit" name="seguir">Seguir</button>
                <button onclick="redirectTo('login')" class="mensaje"type="submit" name="mensaje">Mensaje</button>
            @endif
          </ul>
        </div>
    </section>
    <main>
    <section class="additional-info">
        <nav class="section-na navbar navbar-expand-lg navbar-light bg-light justify-content-center section-na-perfil">
            <ul class="navbar-nav">
            <li class="nav-item navItemPerfil">
                <a class="abajo linksection" href="perfil.php">Información</a>
            </li>
            <li class="nav-item navItemPerfil">
                <a class="abajo linksection" href="perfil.php">Trabajo<a>
            </li>
            <li class="nav-item navItemPerfil">
                <a class="abajo linksection" href="perfil.php">Apreciaciones</a>
            </li>
            </ul>
        </nav>
    </section>
    <section class="portfolio_thumbnails">
        <div class="publicaciones-perfil container">
            <div class="row">
            @if($userPosts->count() > 0)
                @foreach($userPosts as $post) 
                    <div class="col-sm-12 col-md-6 col-lg-4 publicacion-perfil">
                            <a href="/posts/{{$user->id}}"><img src="{{ asset('images/publicacion2.jpg') }}" alt=""></a>
                    </div>
                @endforeach
            @else
                @auth
                    @if(Auth::user()->id === $user->id)
                        <h2 id="no-posts">No tienes publicaciones aún</h2>
                        <div class="new-post-icon-container">
                            <a href="{{ url('/posts/new')}}"><img src="{{ asset('images/plus.png') }}" class="new-post-icon" alt="add new post icon"></a>
                        </div>
                    @else
                        <h2 id="no-posts">No hay publicaciones de este usuario.</h2>
                    @endif
                @else
                    <h2 id="no-posts">No hay publicaciones de este usuario.</h2>
                @endif
            @endif
            </div>
        </div>
        {{$userPosts->appends(request()->all())->links()}}
    </section>
    </main>

@endsection