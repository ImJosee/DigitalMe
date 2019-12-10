@extends('.layouts.default')

@section('title', 'Post especifico')

@section('content')
<main>
    <div class="publicaciones container-fluid flex">
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
        <div class="post-content-container">
            <h3 id="post-content">
            {{ $post->content }}
            </h3>
        </div>
        <div class="row">
            <div class="publicacion">
                <a href="/posts/{{$post->id}}">
                    <img id="post-detail" src="{{ asset('images/publicacion2.jpg') }}" alt="">
                </a>
            </div>
        <div class="detalle-post">
            Visitas: {{count($post->views()->getResults())}}
            Likes: {{count($post->likes()->getResults())}}
        </div>
    </div>
</main>
@endsection
