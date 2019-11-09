@extends('layouts.default')

@section('title', 'Post especifico')

@section('content')
<main>
    <div class="publicaciones container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="publicacion">
                <a href="/posts/{{$post->id}}"><img src="images/publicacion2.jpg" alt=""></a>
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