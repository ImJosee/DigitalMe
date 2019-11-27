@extends('layouts.default')

@section('title', 'Ingresa')
@push('styles')
    <link rel="stylesheet" href="css/styles.css">
@endpush

@section('content')
<div class="container-fluid container-login">
      <div class="bloque-inicio col-sm-12 col-md-10 col-lg-6 col-xl-4">
        <h2 class="inicia h2Login">Inicia  sesíon para continuar</h2>
        <h1 class="h1Login">DigitalMe</h1>
        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="form-group row">
            <div class="col-12">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            <a class="" href="">¿Contraseña olvidada?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Iniciar sesión</button>
        </form>
        <h3 class="miembro">¿Todavía no eres miembro? </h3><a class="registrarse" href="/register">Registrarse</a>
        <h3 class="empresa">¿Deseas utilizar la cuenta de tu empresa o de tu centro educativo?</h3>
        <a href="register">Iniciar sesión con un Enterprise ID</a>
        <h3 class="empresa">O inicia sesión con</h3>
        <a class="google" href="www.google.com"><img class="logos-login" src="images/busqueda.png" alt=""></a>
        <a class="facebook" href="www.facebook.com"><img class="logos-login" src="images/facebook.png" alt=""></a>
        </div>
      </div>
@endsection