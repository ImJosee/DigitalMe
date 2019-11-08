@extends('layouts.default')

@section('title', 'Registrarse')
@push('styles')
    <link rel="stylesheet" href="css/styles.css">
@endpush

@section('content')
<div class="div-reg-container container-fluid">
    <main class="register-main">
        <div class="header-container">
            <div>
                <img class="logo" src="images/dm-logo.svg" alt="Logo del proyecto">
            </div>
        </div>
        <form class="register-form" action="/register" method="post">
            @csrf
            <div class="header-info">
                <h2 class="register-h2">Crear una cuenta</h2>
                <h1 class="header">
                    <strong>DigitalMe</strong>
                </h1>
                <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
                <p>¿Registrando una empresa? <a href="enterprise.php">Haz click aquí</a></p>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="labels" for="email">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?=$_POST['email'] ?? ''?>">
                    <div class='error-email'>
                        
                    </div>
                    </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="labels" for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="name" id="nombre" value="<?=$_POST['name'] ?? ''?>">
                    <div class='error-name'>

                    </div>
                    </div>
                <div class="col">
                    <label class="labels" for="apellido">Apellidos</label>
                    <input type="text" class="form-control" name="surname" id="apellido" value="<?=$_POST['surname'] ?? ''?>">
                    <div class='error-surname'>
                        
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="labels" for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?=$_POST['password'] ?? ''?>">
                    <div class='error-password'>
                        
                    </div>
                    </div>
            </div>
            <p class="subtitle">Fecha de nacimiento</p>
            <div class="form-row">
                <div class="col">
                    <label class="labels mr-sm-2" for="inlineFormCustomSelect">Mes</label>
                    <select name="month" class="custom-select" id="inlineFormCustomSelect">
                        
                    </select>
                    </div>
                    <div class="col">
                        <label class="labels" for="dia">Día</label>
                        <input type="text" class="form-control" name="day" id="dia" value="<?=$_POST['day'] ?? ''?>">
                    </div>
                    <div class="col">
                        <label class="labels" for="año">Año</label>
                        <input type="text" class="form-control" name="year" id="año" value="<?=$_POST['year'] ?? ''?>">
                    </div>
            </div>
            <div class='error-birthday'>
                
            </div>
            <div class="form-row">
                    <div class="col">
                    <label class="labels mr-sm-2" for="inlineFormCustomSelect">País</label>
                    <select name="country" class="custom-select" id="inlineFormCustomSelect">
                    </select>
                    </div>
            </div>
            <div class='error-birthday'>
                
            </div>
            <div class="form-row">
                <div class="col">
                    <input type="checkbox" name="remember"><span>  Recordar mi sesión</span>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <p>
                    Haciendo clic en Crear cuenta, estoy de acuerdo en haber leído y aceptado <a href="#terminos&condiciones">la Condiciones de uso y la Política de privacidad</a>.
                    </p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <button type="submit" class="registrar btn btn-success">Crear cuenta</button>
                </div>
            </div>
        </form>
    </main>
</div>
@endsection