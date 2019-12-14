
contenidoDos = document.getElementById('conteDosRow');
var url1;//variable global
function galeriaAjax(url,idOb){
    console.log(idOb);
    url1=url;
    // document.getElementById("myInputmate").value = "";
    //BORRO EL CONTENIDO DE MATERIAS
    const miajax= new XMLHttpRequest();
    // INSTANSIAMOS OBJETO XMLHTTPREQUEST ES EL QUE NOS PERMITE OBTENER ALGO SIN REFRESCAR
    miajax.open('GET',url,true);//TRUE  PARA QUE SEA ASINCRONO
    miajax.send();
    miajax.onreadystatechange = function(){//ACCEDEMOS A UNA DE SUS FUNCIONES
        if (this.readyState == 4 && this.status == 200) {
             // COMPRUEBO LOS ESTADOS (4 TODO A FINALIZADO, 200 TODO OK)
            let datos=JSON.parse(this.responseText);
            console.log(datos);
            // CON ESTA FUNCION LO PROYECTO EN LA TABLA
            proyeccion(contenidoDos,datos,idOb);
            return datos;
        }
       
    }
    
}
// FUNCION PARA PROYECTAR
function proyeccion (contenido,listaCarreras,idOb){
    contenidoFooter = document.getElementById('modalfooter');
    contenidoFooter.innerHTML='';
    contenido.innerHTML='';
    console.log(contenido);
    var ss=1;
    contenidoFooter.innerHTML +=`
    <div class="container ">
    <div class="row ">
    <div class="col-4 justify-content-around">
    <p class="servicioModal" ><b>SERVICIOS </b></p>
          <ul style="list-style-type:none;">
            <li class="py-3">
              <i class="fas fa-bath"></i>1
             
            </li>
            <li class="py-3">
              <i class="fas fa-box"></i>4
            </li>
            <li class="py-3">
              <i class="fas fa-utensils"></i>4
            </li>
          </ul>
    </div>
    <div class="col-sm">
     
        <table >
        <tr>
          <th>UBICACION <i class="fas fa-arrow-down"></i></th>
          <th>CALLE <i class="fas fa-arrow-down"></i></th>
        </tr>
        <tr>
          <td>
          <ul>
          <li>
      
          <p class="textoModalDer">
          ${idOb.observaciones}
          <p>
          </li>
          </ul>
        
          </td>
          <td>
          <ul>
          <li>
          <p class="textoModalDer">
          ${idOb.calle}
          <p>
          </li>
          </ul>
          </td>
        </tr>
      </table>
    </div>
    
    
  </div>

</div>
 `;                                               
    for(let item of listaCarreras){
        contenido.innerHTML +=` 
                            <div class="mySlides">
                                        
                            <img src="/img/${item.imagen}" style="width:100%;height:250px">
                        </div>
                        `
                    }
                   
                    for(let item of listaCarreras){
                        contenido.innerHTML +=` 
                                           
                                        <div class="column">
                                            <img class="demo cursor" src="/img/${item.imagen}" style="width:100%;height:80px" onclick="currentSlide(${ss++})" alt="Nature and sunrise">
                                        </div>`
                                    }           
                                    currentSlide(1);  

    }

var slideIndex = 1;

// showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
 
}