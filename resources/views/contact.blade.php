@extends('layouts.default')

@section('title', 'Preguntas frecuentes')

@section('content')

<main>
    <div class="info-contacto container">
      <form>
          <div class="form-group row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="exampleFormControlTextarea1">Dejanos tu consulta</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div> 
          <div class="form-group row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <button type="submit" class="btn btn-primary btn-login">Enviar</button>
            </div>
          </div>  
      </form>
    </div>
</main>

@endsection
