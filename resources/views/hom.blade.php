@extends('plantilla')

@section('content')

<div id="SLIDE_BG" >
    <!-- CONTENEDOR DE FILTRO FORMULARIO -->
    @auth
    {{-- LOGUEADO --}}
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Propiedad</a>
        <a href="/tipos">Tipos</a>
        <a href="#">Localidades</a>
        <a href="#">Caracteristicas</a>
      </div>

      <div  class="crearLog">

        <button class="botonCrearLog" onclick="openNav()">CRUD</button>
      </div>


    @endauth
    <div class="bordesRedondo">
      <h1 class="text-center">¿Que desea hacer?</h1>
      <div class="text-center ">

        <!--  FORMULARIO -->
        <form action="/propiedades" id="formulario" method="post">
        {{csrf_field() }}
        <input id="alq"type="button" value="Alquilar " name="Alquilar" onclick="activarAlq()" >
            <input id="comp"  type="button" value="Comprar" name ="Comprar" onclick="activarComp()"  >
            <!-- <button class="button1">Comprar</button> -->
            <div class="form-inline justify-content-center py-3">
              <div class="">

                <select class="mt-3" id="" name="propiedad_id">
                  <option value="none" disabled selected hidden>Selecciona una Propiedad</option>
                  @foreach($tipos as $tipo)
                  <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mx-2">

                <select class="mt-3 "  name="localidad_id">
                  <option value="none" disabled selected hidden>Selecciona una localidad</option>
                  @foreach($localidades as $localidad)
                  <option value="{{$localidad->id}}">{{$localidad->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="mx-3 mb-1">
              <button class="btn btn-danger" id="pe">
                enviar
              </button>
            </div>
            <!-- AQUI SE VALUA LOS ERRORES -->
              @if($errors->any())
                <div class="row justify-content-center">
                  <div class="col-md-6">

                    <div class="alert  alert-danger">
                    <strong>

                      POR FAVOR CORRIGE LOS ERRORES:
                    </strong>
                      <ul>
                        @foreach($errors->all() as $error)
                        <li>
                        {{$error}}
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              @endif
              <!-- FIN DE ERRORES -->
          </form>
        </div>
    </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('js/menuLateral.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/controlarFocus.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
