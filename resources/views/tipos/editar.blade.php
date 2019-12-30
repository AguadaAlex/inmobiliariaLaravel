@extends('plantilla')

@section('content')
<h1>Editar</h1>
<div class="d-flex justify-content-end py-5">

    <a href="/tipos" class="btn btn-primary btn-sm ">Volver a lista de Tipos...</a>
</div>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('tipos.update', $tipo->id) }}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
    @enderror

    @error('descripcion')
        <div class="alert alert-danger">
            La descripción es obligatoria
        </div>
    @enderror

    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $tipo->nombre }}">

    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>

@endsection
