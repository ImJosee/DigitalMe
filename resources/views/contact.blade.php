@extends('layouts.default')

@section('title', 'Preguntas frecuentes')

@section('content')

<main>
    <div class="info-contacto container">
      <form>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Dejanos tu consulta</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        <button type="submit" class="btn btn-primary btn-login">Enviar</button>
</form>

    </div>
</main>

@endsection
