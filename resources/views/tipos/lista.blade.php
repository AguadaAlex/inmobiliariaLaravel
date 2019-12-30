@extends('plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="card-body">
            @if ( session('mensaje') )
              <div class="alert alert-success">{{ session('mensaje') }}</div>
            @endif
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Tipos para {{auth()->user()->name}}</span>
                    <a href="/tipos/create" class="btn btn-primary btn-sm">Nuevo Tipo</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipos as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td> <a href="{{route('tipos.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="{{ route('tipos.destroy', $item->id) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tipos->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
