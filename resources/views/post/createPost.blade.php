@extends('.layouts.default')

@section('title', 'Crear Post')

@section('content')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<div class="container">
    <form class="register-form" action="{{ url('/posts' )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <!-- <div class="form-row">
            <div class="col">
                <label class="labels" for="post_image">Main Image</label>
                <input id="post_image" type="file" class="form-control" name="post_image">
            </div>
        </div> -->
        <div class="form-row">
            <div class="col">
                <label class="labels" for="title">Title</label>
                <input id="title-edit" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title">
                @error('title')
                    <div class="error-title">
                        <strong style="color: red">{{ $message }}</strong>
                    </div>   
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="subtitle">Subtitle</label>
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
                <label class="labels" for="content">Content</label>
                <textarea class="form-control summernote" name="content"></textarea>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.summernote').summernote({

         height:400,

       });

   });
</script>    
@endsection