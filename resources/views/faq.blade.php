@extends('layouts.default')

@section('title', 'Preguntas frecuentes')

@section('content')

<main>
    <section class="section hero">
        <div class="hero-inner">
            <form role="search" class="search search-full" data-search="" data-instant="true" autocomplete="off" action="#" method="#"><input type="search" name="query" id="query" placeholder="Buscar..." autocomplete="off"/></form>
        </div>
    </section>
    <div class="container">
        <section class="section knowledge-base">
        <section class="categories blocks">
            <div>
                <h3 id="faq-title">
                    Algunas preguntas frecuentes:
                </h3>
            </div>
            <ul class="blocks-list">
                <li class="blocks-item">
                <a href='#' class="blocks-item-link question">
                    <h4 class="blocks-item-title">¿Quienes somos? </h4>
                    <p class="blocks-item-description"></p>
                </a>
                </li>
                <li class="blocks-item">
                <a href='#' class="blocks-item-link question">
                    <h4 class="blocks-item-title">Registro, Login, Configuración de cuenta</h4>
                    <p class="blocks-item-description"></p>
                </a>
                </li>
                <li class="blocks-item">
                <a href='#' class="blocks-item-link question">
                    <h4 class="blocks-item-title">Crear, editar y publicar contenido</h4>
                    <p class="blocks-item-description"></p>
                </a>
            </ul>
        </section>
        </section>
    </div>
</main>

@endsection
