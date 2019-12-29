@extends('plantilla')

@section('content')
<script type="text/javascript" src="{{asset('js/popupGaleriaJquery.js')}}"></script>
<h1>Propiedades</h1>
<div class="container">

    <div class="card-deck">
    @foreach ($propiedades as $item) 
    
    <div class="card">
      <div class="contenedor-imagen mx-1">
        
        <img src="/img/{{$item->foto}}" class="card-img-top img-fluid imagen-propiedad" width="100"/>
          <a href="#" class="enlace">
            <div class="middle">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" onclick="galeriaAjax('{{route('galerias',$item->id)}}',{{$item}})">
              ver Propiedad
            </button>
              <!-- <div class="text">Ver Propiedad</div> -->
            </a>
            </div>
      </div>
        
        <div class="card-body">
          <h5 class="card-title">{{$item->calle}}</h5>
          <p class="card-text">{{$item->observaciones}}</p>
          <ul id="menu">
            <li>
              <i class="fas fa-shower"></i>{{$item->cantambientes}}
            </li>
            <li>
            <i class="fas fa-grip-lines-vertical"></i>
               

            </li>
            <li>
            <i class="fas fa-box"></i>

            </li>
           
          </ul>  

        
          <hr>
          <p class="card-text">
            <h2>
              <!-- <i class="fas fa-bold"></i> -->
              
              {{$item->precio}}$
          </h2>
        </p>
        </div>
      </div>
    
    @endforeach 
      
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- COMIENZO DE SLIDER -->
        

                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  <div id="conteDosRow">

                   
                    
                  </div>
<!-- FIN DE SLIDER -->
      </div>
      <div id="modalfooter">
        
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="{{asset('js/popupGaleria.js')}}"></script>
@endsection