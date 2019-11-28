@extends('.layouts.default')

@section('title', 'Post especifico')

@section('content')
<main>
    <div class="publicaciones container-fluid flex">
        <div class="row">
            <div class="publicacion">
                <a href="/posts/{{$post->id}}">
                    <img id="post-detail" src="{{ asset('images/publicacion2.jpg') }}" alt="">
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
