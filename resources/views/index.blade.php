@extends('layouts.default')

@section('title', 'Bienvenido a digitalme')

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
            <a class="abajo linksection" href="index">Categorias<a>
        </li>
        <li class="nav-item">
            <a class="abajo linksection" href="login">Escuelas y organizaciones</a>
        </li>
        </ul>
    </nav>
    </section>
<main>
    <div class="publicaciones container">
      <div class="row">
      @foreach($posts as $post)
        <a href="/posts/{{$post->id}}">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="publicacion">
              <img src="images/publicacion2.jpg" alt="">
                <div>
                    <span>
                    {{ $post->title }}.  Views: {{$post->views}}
                    </span>
                </div>
            </div>
        </div>
        </a>
      @endforeach
      </div>
    </div>

</main>
@endsection
