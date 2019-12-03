@extends('.layouts.default')

@section('title', 'Editar perfil')

@section('content')

<div class="container">
    <form class="register-form" action="/users/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-row">
            <div class="col">
                <label class="labels" for="email">Correo electronico</label>
                <input id="email-edit" type="email" readonly class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                @error('email')
                    <div class="error-email">
                        <strong style="color: red">{{ $message }}</strong>
                    </div>   
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="name">Nombre</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="error-name">
                            <strong style="color: red">{{ $message }}</strong>
                        </div>
                    @enderror
            </div>
            <div class="col">
                <label class="labels" for="last_name">Apellido</label>
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->getNormalUser->last_name}}" required autocomplete="last_name" autofocus>
                @error('last_name')
                    <div class="error-last_name">
                        <strong style="color: red">{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="website">Sitio web</label>
                <input id="website" type="text" value="{{$user->web}}" class="form-control" name="web">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="location">Ubicacion</label>
                <input id="location" type="text" value="{{$user->location}}" class="form-control" name="location">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="labels" for="image-profile">Imagen de perfil</label>
                <input id="profile-image" type="file" class="form-control" name="profile-image">
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