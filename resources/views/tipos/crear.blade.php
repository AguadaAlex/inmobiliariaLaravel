@extends('plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Tipo</span>
                    <a href="/tipos" class="btn btn-primary btn-sm ">Volver a lista de Tipos...</a>
                </div>
                <div class="card-body">
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/tipos">
                    @csrf
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2 py-3"
                    />

                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
