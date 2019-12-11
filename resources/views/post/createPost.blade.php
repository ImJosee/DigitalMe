@extends('.layouts.default')

@section('title', 'Crear Post')

@section('content')

@push('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endpush

<div class="container">
    <form class="register-form" action="{{ url('/posts' )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-row">
            <div class="col">
                <label class="labels" for="post_image">Imagen Principal</label>
                <input id="post_image" type="file" class="form-control" required name="post_image">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="title">Titulo</label>
                <input id="title-edit" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title">
                @error('title')
                    <div class="error-title">
                        <strong style="color: red">{{ $message }}</strong>
                    </div>   
                @enderror
            </div>
            <div class="col">
                <label class="labels" for="subtitle">Subtitulo</label>
                <input id="subtitle" type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="" required autocomplete="subtitle" autofocus>
                    @error('subtitle')
                        <div class="error-subtitle">
                            <strong style="color: red">{{ $message }}</strong>
                        </div>
                    @enderror
            </div>
        </div>
    
        <div class="form-row">
            <div class="col">
                <label class="labels" for="content">Contenido</label>
                <textarea id="summernote" required class="form-control" name="content"></textarea>
                @error('content')
                    <div class="error-content">
                        <strong style="color: red">{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <button type="submit" class="save btn btn-success">Guardar cambios</button>
            </div>
        </div>
    </form>
</div>  
@endsection