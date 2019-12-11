@extends('.layouts.default')

@section('title', 'Post especifico')

@section('content')
<main>
    <div class="container-fluid flex">
        <div class="post-image-container">
            <a href="/posts/{{$post->id}}">
                @if($post->image != null) 
                    <img id="post-detail" src="/storage/{{$post->image}}" alt="">
                @else
                    <img id="post-detail" src="{{ asset('images/publicacion2.jpg') }}" alt="">
                @endif
            </a>
        </div>
        <div class="detalle-post">
            Visitas: {{count($post->views()->getResults())}}
            Likes: {{count($post->likes()->getResults())}}
        </div>  
        <div class="post-title-container">
            <h2 id="post-title">
            {{ $post->title }}
            </h2>
        </div>
        <div class="post-subtitle-container">
            <h3 id="post-subtitle">
            {{ $post->subtitle }}
            </h3>
        </div>
        <div class="modal-continer">
            <button id="modal-content-button" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver el contenido</button>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    {{ $post->content }}
                    </div>
                </div>
            </div>         
        </div>  
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
@endsection
