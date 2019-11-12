@extends('layouts.default')

@section('title', 'Post especifico')

@section('content')
<<<<<<< HEAD
    <nav class="section-na navbar navbar-expand-lg navbar-light bg-light justify-content-center">
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
<main>
    <div class="publicaciones container-fluid flex">
          <div class="row">
            <div class="publicacion">
        <a href="/posts/{{$post->id}}">
              <img src="{{ asset('images/publicacion2.jpg') }}" alt="">
        </a>
        </div>
        <div class="detalle-post">
          Title: {{ $post->title }}.<br/>
          Subtitle: {{$post->subtitle}}.<br />
          Views: {{$post->views}}.<br />
          Created at: {{$post->created_at}}.<br />
        </div>
    </div>

</main>
@endsection
=======
<main>
    <div class="publicaciones container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="publicacion">
                <div>
                    <span>
                    {{ $post->title }}.  Views: {{$post->views}}
                    </span>
                </div>
            </div>
        </div>
      </div>
    </div>
</main>
@endsection    
>>>>>>> 8c792251f57c8e92b84407ca57f3e530da665362
