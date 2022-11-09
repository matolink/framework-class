@extends('layouts.layout')

<!-- nombre rating imagen summary -->

@section('content')
<div class="container">
<h1>Agregar un nuevo Contenido</h1>
<form method="POST" action="{{ url('/save') }}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre Pelicula</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rating</label>
    <input type="number" class="form-control" id="rating" name="rating" aria-describedby="emailHelp" max="5" min="1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Link Imagen Pelicula</label>
    <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Resumen</label>
    <input type="text" class="form-control" id="summary" name="summary" aria-describedby="emailHelp" required>
  </div>
        
  <a href="{{ url('/home') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
