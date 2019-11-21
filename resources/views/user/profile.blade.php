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
              <li> <a href="#">www.digital-me.com</a> </li>
              <li> <a href="#"><img src="{{ asset('images/location.svg') }}" class="location-icon" alt="location icon">Lugar</a> </li>
            </ul>
        </div>
        <div class="">
            <ul class="fol-mes-buttons">
            <button class="seguir" type="submit" name="seguir">Seguir</button>
            <button class="mensaje"type="submit" name="mensaje">Mensaje</button>
            <?=$edit ?? ''?>
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
        <div class="col-sm-12 col-md-6 col-lg-4 publicacion-perfil">
                <a href="/posts/{{$user->id}}"><img src="{{ asset('images/publicacion2.jpg') }}" alt=""></a>
        </div>
        </div>
        </div>

    </section>
    </main>

@endsection