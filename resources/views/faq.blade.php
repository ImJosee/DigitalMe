@extends('layouts.default')

@section('title', 'Preguntas frecuentes')

@section('content')

<main>
    <section class="section hero">
        <div class="hero-inner">
            <form role="search" class="search search-full" data-search="" data-instant="true" autocomplete="off" action="{{ url(request()->getUri()) }}" method="GET"><input type="search" name="search" id="query" placeholder="Buscar..." autocomplete="off"/></form>
        </div>
    </section>
    <div class="container">
        <section class="section knowledge-base">
        <section class="categories blocks">
            <div>
                <h3 id="faq-title">
                @if(request()->has('search'))
                    @if(count($questions) == 0)
                        <h2 id="search-results">No hay preguntas frecuentes relacionadas con {{request('search')}}</h2>
                    @else
                        <h2 id="search-results">Resultados para: {{request('search')}} (Total: {{$questions->total()}})</h2>
                    @endif
                @else 
                    Algunas preguntas frecuentes:
                @endif
                </h3>
            </div>
            <ul class="blocks-list">
        @foreach($questions as $question)
                <li class="blocks-item">
                <a href='#' class="blocks-item-link question">
                    {{$question->question}}
                </a>
                </li>
            @endforeach
            </ul>
        </section>
        </section>
    </div>
</main>

@endsection
